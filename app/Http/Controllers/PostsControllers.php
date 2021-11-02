<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsControllers extends Controller
{
    //
    public function index(){

        $posts = Post::all();

        return view('posts.index', compact('posts'));

    }

    public function create(){

        return view('posts.create');

    }
    
    public function store(){

        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Post::create([
            'title' => request('title'),
            'content' => request('content')
        ]);

        return redirect('/posts');

    }
    
    public function edit(Post $post){

        $posts = Post::all();

        return view('posts.edit', compact('post'));

    }
    
    public function update(Post $post){

        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post->update([
            'title' => request('title'),
            'content' => request('content')
        ]);

        return redirect('/posts');

    }
    
    public function delete(Post $post){

        $post->delete();

        return redirect('/posts');

    }
}
