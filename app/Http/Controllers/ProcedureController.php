<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
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
        $procedure = $this->contentCache->remember(
            'procedure:'.$slug,
            ContentCache::TTL_MEDIUM,
            fn () => Procedure::with('faqs')
                ->where('slug', $slug)
                ->where('is_active', true)
                ->firstOrFail()
        );

        return view('procedures.show', compact('procedure'));
    }

    public function searchableAs()
    {
        return 'procedures';
    }
}
