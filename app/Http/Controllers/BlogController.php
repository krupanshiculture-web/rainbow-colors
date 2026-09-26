<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::query()
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->paginate(9);

        return view('front.blog', compact('blogs'));
    }

    public function show(string $slug)
    {
        $blog = Blog::query()
            ->where('slug', $slug)
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->firstOrFail();

        $latestBlogs = Blog::query()
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->where('id', '!=', $blog->id)
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('front.blog-single', compact('blog', 'latestBlogs'));
    }
}