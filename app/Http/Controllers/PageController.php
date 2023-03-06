<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        return view ('home');
    }

    public function blog()
    {
        // $posts = Post::get();
        // $posts = Post::first();
        // $posts = Post::find(25);

        //dd($post);

        $posts = Post::latest()->paginate();
        return view('blog', ['posts' => $posts]);


    }

    public function post(Post $post)
    {
            return view('post', ['post' => $post]);
    }
}
