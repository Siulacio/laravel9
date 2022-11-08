<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController
{
    public function index()
    {
        $posts = Post::get();

        return view('blog', ['posts' => $posts]);
    }
}
