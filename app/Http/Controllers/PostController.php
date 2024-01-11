<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('user')->get();
        return view('user.posts.index',['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post($request->all());
        $post->user_id = auth()->user()->id;
        $slug = Str::slug($request->input('title'));
        $post->slug = $slug;
        $post->save();
      
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $post->addMediaFromRequest('avatar')
            ->withResponsiveImages()
            ->toMediaCollection('avatar');
        }
        return redirect()
        ->back()
        ->with('status', 'Post created success!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('user.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('user.posts.edit', compact('post'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
    
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $post->addMediaFromRequest('avatar')
                ->withResponsiveImages()
                ->toMediaCollection('avatar');
        }
        return redirect()->route('posts.edit', $post->id)
        ->with('status', 'Post updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::withTrashed()->find($id); // Retrieve the soft deleted post
        if ($post) {
            $post->clearMediaCollection('avatar'); // Delete associated media
            $post->forceDelete(); // Permanently delete the post
        }
        return redirect()
        ->route('posts.index');
    }

   
}
