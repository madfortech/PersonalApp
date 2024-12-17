<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class LikeController extends Controller
{
    
    public function like($id)
    {
        $user = Auth::user();
        $post = Post::findOrFail($id);

        $user->like($post);

        //return view('posts.show',['post' => $post->slug]);
        return redirect()->route('posts.show', ['post' => $post->slug]);
    }

    public function unlike($id)
    {
        $user = Auth::user();
        $post = Post::findOrFail($id);

        $user->unlike($post);

        // return redirect()->route('posts.show', ['post' => $post->slug]);
        return redirect()->route('posts.show', ['post' => $post->slug]);
    }
}
