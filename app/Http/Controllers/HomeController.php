<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\QuestionAnswer;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $recent_posts = Post::latest()->take(3)->get();
        return view('index', compact('recent_posts'));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contacts()
    {
        return view('pages.contacts');
    }
    public function blogs()
    {
        return view('pages.blogs', [
            'categories' => Category::with('post')->get(),
            'posts' => Post::with('user', 'category', 'content')->paginate(4),
        ]);
    }
    public function blog(Post $post)
    {
        return view('pages.singlepost', [
            'categories' => Category::with('post')->get(),
            'post' => $post->load('user', 'category', 'content'),
        ]);
    }
}
