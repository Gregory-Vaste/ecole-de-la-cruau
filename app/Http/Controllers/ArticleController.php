<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $posts = Post::all(); 
        return view('article/index', compact('posts'));
    }

    public function show(Request $request)
    {
        $post = Post::find(1);
        return view('article/show', compact('post'));
    }

    // return view for user auth
    public function indexAuth()
    {
        $posts = Post::all();
        return view('articleUserAuth/index', compact('posts'));
    }

    public function showAuth()
    {
        $post = Post::find(1);
        return view('articleUserAuth/show', compact('post'));
    }

}
