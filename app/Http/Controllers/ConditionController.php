<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use App\Services\ContentCache;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function __construct(
        private readonly ContentCache $contentCache,
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = trim((string) $request->input('search', ''));
        $letter = (string) $request->input('letter', 'ALL');
        $page = max(1, (int) $request->input('page', 1));
        $cacheKey = sprintf(
            'conditions:index:p%d:s%s:l%s',
            $page,
            md5($search),
            $letter
        );

        $conditions = $this->contentCache->remember(
            $cacheKey,
            ContentCache::TTL_SHORT,
            function () use ($request) {
                $query = Condition::where('is_active', true);

                if ($request->filled('search')) {
                    $query->where('name', 'like', '%'.trim($request->search).'%');
                }

                if ($request->filled('letter') && $request->letter !== 'ALL') {
                    $query->where('name', 'like', $request->letter.'%');
                }

                return $query
                    ->orderBy('sort_order')
                    ->orderBy('name')
                    ->paginate(10)
                    ->withQueryString();
            }
        );

        return view('conditions.index', compact('conditions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $condition = $this->contentCache->remember(
            'condition:'.$slug,
            ContentCache::TTL_MEDIUM,
            fn () => Condition::with('faqs')->where('slug', $slug)->firstOrFail()
        );

        return view('conditions.show', compact('condition'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Condition $condition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Condition $condition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Condition $condition)
    {
        //
    }

    public function searchableAs()
    {
        return 'conditions';
    }
}
