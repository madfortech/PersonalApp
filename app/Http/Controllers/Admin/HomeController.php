<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $latestuser = User::latest()->limit(7)->get();
        // Retrieve all posts from the database
        $latestpost = Post::latest()->limit(7)->get();
      

       
        
        return view('admin.home', compact('latestpost', 'latestuser'));
    }
}
