<?php

namespace App\Http\Controllers;

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
}
