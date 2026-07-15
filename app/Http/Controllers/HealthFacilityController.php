<?php

namespace App\Http\Controllers;

use App\Models\HealthFacilityPage;
use App\Services\ContentCache;
use Illuminate\Http\Request;

class HealthFacilityController extends Controller
{
    public function __construct(
        private readonly ContentCache $contentCache,
    ) {}

    public function index(Request $request)
    {
        $search = trim((string) $request->input('search', ''));
        $letter = (string) $request->input('letter', '');
        $page = max(1, (int) $request->input('page', 1));
        $cacheKey = sprintf(
            'facilities:index:p%d:s%s:l%s',
            $page,
            md5($search),
            $letter !== '' ? $letter : 'ALL'
        );

        $facilities = $this->contentCache->remember(
            $cacheKey,
            ContentCache::TTL_SHORT,
            function () use ($request) {
                $query = HealthFacilityPage::where('is_active', true);

                if ($request->filled('search')) {
                    $term = $request->input('search');
                    $query->where(function ($q) use ($term) {
                        $q->where('hero_title', 'like', "%{$term}%")
                            ->orWhere('overview_content', 'like', "%{$term}%");
                    });
                }

                if ($request->filled('letter')) {
                    $letter = $request->input('letter');
                    $query->where('hero_title', 'like', $letter.'%');
                }

                return $query->select(['slug', 'hero_title', 'hero_background', 'overview_content'])
                    ->orderBy('hero_title')
                    ->paginate(9)
                    ->withQueryString();
            }
        );

        return view('health-facilities.index', compact('facilities'));
    }

    public function show($slug)
    {
        $facility = $this->contentCache->remember(
            'facility:'.$slug,
            ContentCache::TTL_MEDIUM,
            fn () => HealthFacilityPage::where('slug', $slug)
                ->where('is_active', true)
                ->firstOrFail()
        );

        return view('health-facilities.show', compact('facility'));
    }
}
