<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latestpost = Post::latest()->limit(5)->get();
        $post = Post::with('user')->get();
        $latestCategory = Category::latest()->limit(5)->get();
        return view('posts.index',compact('post', 'latestpost','latestCategory'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $latestpost = Post::latest()->limit(5)->get();
        $categories = Category::all();
        $latestCategory = Category::latest()->limit(5)->get();
        return view('posts.create',compact('latestpost','categories','latestCategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
       
        $user = Auth::user();

        $post = Post::firstOrCreate([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'description' => $request->input('description'),
            'user_id' => $user->id,
        ]);
        
        if ($request->filled('category_id')) {
            $category = Category::find($request->input('category_id'));
            if ($category) {
                $post->categories()->attach($category);
            }
        }

        if ($request->hasFile('avatar')) {
            $post->addMedia($request->file('avatar'))->toMediaCollection('posts');
        }
        
        return redirect()->back()->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
    */
    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
    */
    public function edit($id)
    {

        $response = Gate::inspect('postupdate', $id);
        
        $post = Post::find($id);
       
        $latestpost = Post::latest()->limit(5)->get();
        $latestCategory = Category::latest()->limit(5)->get();
        return view('posts.edit', compact('post', 'latestpost','latestCategory'));
    }

    /**
    * Update the specified resource in storage.
    */
    public function update(Request $request, Post $post)
    {
        $user = Auth::user();
        $post->update([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'description' => $request->input('description'),
            'user_id' => $user->id,
            
        ]);

        if ($request->filled('category_id')) {
            $category = Category::find($request->input('category_id'));
            if ($category) {
                $post->categories()->attach($category);
            }
        }

        if ($request->hasFile('avatar')) {
            $post->addMedia($request->file('avatar'))->toMediaCollection('posts');
        }

        return redirect()
        ->back()
        ->with('success', 'Update updated successfully');

    }


    /**
     * Remove the specified resource from storage.
    */
    public function destroy($id)
    {

        $response = Gate::inspect('postdelete', $id);
        

        $post = Post::withTrashed()->find($id); // Retrieve the soft deleted post
        if ($post) {
            $post->clearMediaCollection('avatar'); // Delete associated media
            $post->delete(); // Permanently delete the post
        }
        return redirect()
        ->route('posts.index');
    }
}
