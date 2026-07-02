<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Job;
use App\Models\Message;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $postCount = Post::count();
        $jobCount = Job::count();
        $messageCount = Message::count();
        $publishedPostCount = Post::where('is_published', true)->count();

        return view('admin.dashboard', compact(
            'postCount',
            'jobCount',
            'messageCount',
            'publishedPostCount'
        ));
    }
}
