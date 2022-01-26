<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Post",
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "single post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
