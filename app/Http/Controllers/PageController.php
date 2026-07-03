<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Post;

class PageController extends Controller
{
    public function home()
    {
        $recentPosts = Post::where('is_published', true)
            ->latest()
            ->take(3)
            ->get();

        return view('home', compact('recentPosts'));
    }

    public function about()
    {
        return view('about');
    }

    public function careers()
    {
        $careers = Job::where('is_active', true)
            ->latest()
            ->get();

        return view('careers', compact('careers'));
    }

    public function blogs()
    {
        $posts = Post::where('is_published', true)
            ->latest()
            ->paginate(6);

        return view('blogs.index', compact('posts'));
    }

    public function blogDetail(string $slug)
    {
        $post = Post::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        return view('blogs.show', compact('post'));
    }
}
