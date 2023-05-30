<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;


class PostController extends Controller
{

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(PostRequest $request){

        $post = Post::create($request->all());

        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $post->addMediaFromRequest('avatar')->toMediaCollection('avatars');
        }
        return redirect()
        ->back()
        ->with('success', 'Post created success!');
    }

    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }


    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $post->clearMediaCollection('avatars'); // Clear existing media from the collection
            $post->addMediaFromRequest('avatar')->toMediaCollection('avatars');
        }
        return redirect()
            ->back()
            ->with('success', 'Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()
        ->back()
        ->with('success', 'Post delete successfully!');
    }


}

