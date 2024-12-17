<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Watchlist;
use App\Models\Post;
use App\Models\User;
use Auth;
use Redirect;
class WatchlistController extends Controller
{

    public function index() 
    {
      
        $user = Auth::user();
        $watchlist = $user->watchlist;
        return view('user.watchlist.index', ['watchlist' => $watchlist]);
    }

    public function store($id) 
    {
        $post = Post::findOrFail($id);
        $user = Auth::user();
     
        $createItemInWatchlist = Watchlist::create([
            'user_id' => $user->id,
            'post_id' => $post->id,
        ]);
       
        return Redirect::to('watchlist');   
    }
}
