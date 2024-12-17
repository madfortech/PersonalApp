<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
     /**
     * Display a listing of the resource.
    */
    public function index()
    {
        $categories = Category::paginate(7);
        $latestpost = Post::latest()->limit(5)->get();
        $latestCategory = Category::latest()->limit(5)->get();
        return view('categories.index',compact('categories','latestpost','latestCategory'));
    }
    
    public function create(){
        $latestpost = Post::latest()->limit(5)->get();
        $latestCategory = Category::latest()->limit(5)->get();
        return view('categories.create',compact('latestpost','latestCategory'));
    }

    /**
     * Store a newly created resource in storage.
    */
    public function store(StoreCategoryRequest $request)
    {

        $category = Category::firstOrCreate([
            'name' => $request->input('name'),            
        ]);
 
        return redirect()->back()->with('success', 'Category created successfully');
    }
    
    /**
     * Remove the specified resource from storage.
    */
    public function destroy($id)
    {

        $category = Category::find($id); // Retrieve the deleted category
        $category->delete(); // Delete the category from the database
        return redirect()
        ->route('categories.index');
    }
}
