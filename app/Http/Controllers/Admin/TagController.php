<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTagRequest;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    public function index()
    {
       abort('404');
    }

    public function create()
    {
        $tags = DB::table('tags')->get();
        return View('admin.tags.create',compact('tags'));
    }

    public function store(StoreTagRequest $request)
    {
        Tag::create($request->all());
        return redirect()->route('admin.tags.create');
        //return View('admin.tags.create');
    }

}
