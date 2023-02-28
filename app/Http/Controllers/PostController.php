<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function list() {
        $posts = Post::all();
        dd($posts);
        return view('post.list', compact('posts'));
    }
    public function item(Post $post) {
        return view('post.item', compact('post'));
    }

}
