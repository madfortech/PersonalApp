<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class CreateRoleCategoryController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {

        return view('view-role-category', [
            'admin' => 'Admin',
            'creator' => 'Creator',
            'editor' => 'Editor'
        ]);
    }
    
    
    



    
}