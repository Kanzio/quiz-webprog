<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    private function getAllPost() {
        return Post::all();
    }

    public function showAllPost() {
        $posts = $this->getAllPost();
        return view('home', compact('posts'));
    }

    
}
