<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
class UsersController extends Controller
{
    public function index()
    { 
        $user = User::all();
        $latestpost = Post::latest()->limit(5)->get();
        return view('admin.users.index', compact('user', 'latestpost'));
    }
}
