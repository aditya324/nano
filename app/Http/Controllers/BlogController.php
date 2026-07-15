<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Services\ContentCache;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct(
        private readonly ContentCache $contentCache,
    ) {}

    public function index(Request $request)
    {
        $page = max(1, (int) $request->input('page', 1));

        $blogs = $this->contentCache->remember(
            'blogs:index:p'.$page,
            ContentCache::TTL_SHORT,
            fn () => Blog::where('is_published', true)
                ->orderByDesc('published_at')
                ->paginate(9)
        );

        return view('blogs.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = $this->contentCache->remember(
            'blog:'.$slug,
            ContentCache::TTL_MEDIUM,
            fn () => Blog::where('slug', $slug)
                ->where('is_published', true)
                ->firstOrFail()
        );

        return view('blogs.show', compact('blog'));
    }
}
