<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function indexForAll()
    {   
        $posts=Post::all()->random(3);
        // dd($posts);
        return view('indexRandom/index', compact('posts'));
    }

    
}
