<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Routing\Controller as BaseController;

class PostController extends BaseController
{
<<<<<<< HEAD
    
    public function show($post)
=======

    public function show(Post $post)
>>>>>>> 6e15f180a21dda5faf29de7da3aa13e6a62ebbe3
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
