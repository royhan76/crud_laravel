<?php

namespace App\Http\Controllers;

use App\Models\Post;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Post",
            "posts" => Post::latest()->get(),
            // "blog" => Post::all(),
        ]);
    }
    public function show(Post $post)
    {
        return view('post', [
            "title" => "single post",
            "post" => $post
        ]);
    }
}
