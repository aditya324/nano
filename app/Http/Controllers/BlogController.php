<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    public function index()
    {
        $blogs = Blog::where('is_published', true)
            ->orderByDesc('published_at')
            ->paginate(9);
          
        




        return view('blogs.index', compact('blogs'));
    }


    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        return view('blogs.show', compact('blog'));
    }
}
