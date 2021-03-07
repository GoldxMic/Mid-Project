<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //Create
    public function create(){
        return view('post.create');
    }
    public function store(Request $request){
        Post::create([
            'title' =>$request->title,
            'slug' => \Str::slug($request->title),
            'author' =>$request->author,
            'pages' =>$request->pages,
            'date' =>$request->date
        ]);
        return redirect('/posts');
    }
    //Read
    public function index(){
        $posts = Post::latest()->paginate(6);
        return view('post.index', compact('posts'));
    }
    //Update
    public function edit(Post $post){
        return view('post.edit', compact('post'));
    }
    public function update(Request $request, Post $post){
        $post->update([
            'title' =>$request->title,
            'slug' => \Str::slug($request->title),
            'author' =>$request->author,
            'pages' =>$request->pages,
            'date' =>$request->date
        ]);
        return redirect('/posts');
    }
    //Delete
    public function delete(Post $post){
        $post->delete();
        return redirect('/posts');
    }
}
