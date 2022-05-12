<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('authors');
    }
    public function store(Request $request)
    {

    $post = new Post;
    $post->title = $request->title;
    $post->description = $request->description;
    $post->save();
    return redirect('authors')->with('status', 'Blog Post Successfully Added');
    }
}
