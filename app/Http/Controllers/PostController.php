<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Http\Requests\StorePost;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => BlogPost::all()
        ]);
    }

    public function show($id)
    {
        return view('posts.show', [
            'post' => BlogPost::findOrFail($id)
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePost $request)
    {
        $validatedData = $request->validated();

        $blogPost = BlogPost::create($validatedData);

        $request->session()->flash('status', 'Blog post was created!');

        return redirect()->route('posts.show', ['post' => $blogPost->id]);
    }

    public function edit($id)
    {
        return view('posts.edit', [
            'post' => BlogPost::findOrFail($id)
        ]);
    }

    public function update(StorePost $request, $id)
    {
        $post = BlogPost::findOrFail($id);
        $validatedData = $request->validated();

        $post->fill($validatedData);
        $post->save();

        $request->session()->flash('status', 'Blog post was updated!');

        return redirect(route('posts.show', ['post' => $post->id]));
    }

    public function destroy($id, Request $request)
    {
        $post = BlogPost::findOrFail($id);
        $post->delete();

        // BlogPost::destroy($id); // jeśli nie zależy nam na sprawdzeniu, czy element, który chcemu usunąć istnieje

        $request->session()->flash('status', 'Blog post was deleted!');

        return redirect()->route('posts.index');
    }
}
