<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function show()
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

}
