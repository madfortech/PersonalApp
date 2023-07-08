<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    public function index(): View
    {
      
        return view('admin.posts.index', [
            'posts' => Post::with('user')->latest()->get(),
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(PostRequest $request){

        $post = new Post($request->all());
        $post->user_id = auth()->user()->id;
        $slug = Str::slug($request->input('title'));
        $post->slug = $slug;
        $post->save();
      
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $post->addMediaFromRequest('avatar')->toMediaCollection('avatars');
        }
        return redirect()
        ->back()
        ->with('success', 'Post created success!');
    }

    public function show(Post $post, $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

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
        return redirect(route('admin.admin.home'));
    }


}

