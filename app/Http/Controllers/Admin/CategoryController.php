<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $bstr = file_exists(__DIR__."/resources/views/categories/index");
        if($bstr == ""){
            return redirect()->route('admin.categories.create');
        }
    }
    
    public function create()
    {
        $categories = DB::table('categories')->get();
        return View('admin.categories.create',compact('categories'));
    }

    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->all());
        return redirect()->route('admin.categories.create');
    }
}
