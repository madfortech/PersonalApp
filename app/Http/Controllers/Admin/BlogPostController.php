<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use Illuminate\Http\Request;
use App\Http\Requests\blogPostRequest;
use App\Models\Blogpost;
use Illuminate\Support\Facades\DB;

class BlogPostController extends Controller
{
    use MediaUploadingTrait;
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $blogpost = DB::table('posts')->get();
        return View('admin.posts.index',compact('blogpost'));
    }
    
    public function create()
    {
        return View('admin.posts.create');
    }


    public function store(blogPostRequest $request)
    {   
        $posts = Blogpost::create($request->all());

        

        if ($request->input('avatar', false)) {
            $posts->addMediaFromRequest(storage_path('tmp/uploads/' . basename($request->input('avatar'))))
            ->toMediaCollection('avatar');
        }

        return redirect()->route('admin.posts.index');
    }

    public function edit(Blogpost $blogposts)
    {
        return view('admin.posts.edit', compact('blogpost'));   
    }

    public function update(Request $request, Blogpost $blogposts)
    {
        $blogposts->update($request->all());
        return redirect()->route('admin.posts.index');
    }

 
    public function destroy(Blogpost $blogposts)
    {
        $blogposts->delete();
        return back();
    }    
}