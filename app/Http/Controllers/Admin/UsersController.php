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
        $user = User::paginate(7);
        $latestpost = Post::latest()->limit(7)->get();
        return view('admin.users.index', compact('user', 'latestpost'));
    }

    public function show($id){

        $user = User::find($id);
        return view('admin.users.show', compact('user'));
    }
}
