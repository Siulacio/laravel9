<?php

namespace App\Http\Controllers;

class PostController
{
    public function index()
    {
        $posts = [
            ['title' => 'First post'],
            ['title' => 'Second post'],
            ['title' => 'Third post'],
            ['title' => 'Fourth post'],
        ];

        return view('blog', ['posts' => $posts]);
    }
}
