<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Routing\Controller as BaseController;

class PostController extends BaseController
{
    
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

}
