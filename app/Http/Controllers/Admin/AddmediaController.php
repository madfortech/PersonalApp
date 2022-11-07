<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class AddmediaController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
    */
    public function index()
    {
        $bstr = file_exists(__DIR__."/resources/views/podcasts/tags/index");
        if($bstr == ""){
            return redirect()->route('admin.podcasts.create');
        }
        
    }

    public function create()
    {
        return View('admin.podcasts.create');
    }

    public function store(Request $request)
    {
        // Category::create($request->all());
        // return redirect()->route('admin.categories.create');
    }
    
}