<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
 


class ViewRoleController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::all();

        return view('view-all-role', ['users' => $users]);
    }

    public function show()
    {
        if($users = User::all() ){
            return view('custom.admin', ['users' => $users]);
        }
        
        elseif (count($users) > 12) {
            abort(301);
        }

        // $users = User::all();

       // return view('custom.admin', ['users' => $users]);
    }
    
    
    
    
}