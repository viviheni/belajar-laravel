<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostConttroller extends Controller
{
    //
    public function index()
    {
        $post = Post::all();
        return view('post.index', compact('post'));
    }
}
