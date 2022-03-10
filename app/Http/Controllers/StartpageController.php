<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class StartpageController extends Controller
{
    public function index()
    {
        //$posts =Post::all()->sortByDesc('created_at');
        //Lezte 5
        // $posts =Post::latest()->limit(5)->get();
        //sortiert neuste
        // $posts =Post::latest()->limit(5)->get();
        // als gelöschte ausgeblienden
        $posts =Post::with('user')
            ->latest()
            ->active()
            ->limit(5)
            ->get();

        return view('index', compact('posts'));
    }
}
