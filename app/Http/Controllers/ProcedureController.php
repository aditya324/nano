<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
use App\Models\Speciality;
use App\Services\ContentCache;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    public function __construct(
        private readonly ContentCache $contentCache,
    ) {}

    public function index(Request $request)
    {
        $search = trim((string) $request->input('search', ''));
        $letter = (string) $request->input('letter', 'ALL');
        $page = max(1, (int) $request->input('page', 1));
        $cacheKey = sprintf(
            'procedures:index:p%d:s%s:l%s',
            $page,
            md5($search),
            $letter
        );

        $procedures = $this->contentCache->remember(
            $cacheKey,
            ContentCache::TTL_SHORT,
            function () use ($request) {
                $query = Procedure::where('is_active', true);

                if ($request->filled('search')) {
                    $query->where('title', 'like', '%'.$request->search.'%');
                }

                if ($request->filled('letter') && $request->letter !== 'ALL') {
                    $query->where('title', 'like', $request->letter.'%');
                }

                return $query->orderBy('title')->paginate(10)->withQueryString();
            }
        );

        return view('procedures.index', compact('procedures'));
    }

    public function show($slug)
    {
        $payload = $this->contentCache->remember(
            'procedure:'.$slug.':v2',
            ContentCache::TTL_MEDIUM,
            function () use ($slug) {
                $procedure = Procedure::with('faqs')
                    ->where('slug', $slug)
                    ->where('is_active', true)
                    ->firstOrFail();

                $procedureUrl = '/procedures/' . $procedure->slug;

                $relatedSpeciality = Speciality::query()
                    ->where('is_active', true)
                    ->where(function ($query) use ($procedureUrl) {
                        $query
                            ->where('about_intro', 'like', '%' . $procedureUrl . '%')
                            ->orWhere('about_more', 'like', '%' . $procedureUrl . '%')
                            ->orWhere('overview_content', 'like', '%' . $procedureUrl . '%')
                            ->orWhere('treatments_content', 'like', '%' . $procedureUrl . '%')
                            ->orWhere('conditions_content', 'like', '%' . $procedureUrl . '%')
                            ->orWhere('subspecialties_content', 'like', '%' . $procedureUrl . '%');
                    })
                    ->with([
                        'doctors' => fn ($query) => $query
                            ->with('speciality')
                            ->latest()
                            ->take(3),
                    ])
                    ->first();

                return [
                    'procedure' => $procedure,
                    'relatedSpeciality' => $relatedSpeciality,
                    'procedureDoctors' => $relatedSpeciality?->doctors ?? collect(),
                ];
            }
        );

        return view('procedures.show', $payload);
    }

    public function searchableAs()
    {
        return 'procedures';
    }
}
