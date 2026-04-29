<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', true)->latest()->paginate(6);
        return view('blog', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->where('is_published', true)->firstOrFail();
        $recentPosts = Post::where('id', '!=', $post->id)->where('is_published', true)->latest()->limit(3)->get();
        return view('blog-detail', compact('post', 'recentPosts'));
    }
}
