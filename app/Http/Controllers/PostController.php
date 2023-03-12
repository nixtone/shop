<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function list() {
        $posts = Post::all();

        return view('post.list', compact('posts'));
    }
    public function item($translit) {
        //dump('test inner post');
        //dd($translit);

        $post = Post::where('translit', $translit)->get()->first();


        return view('post.item', compact('post'));
    }

}
