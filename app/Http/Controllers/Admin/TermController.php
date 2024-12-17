<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Term;
use App\Models\Post;
use App\Models\Category;
class TermController extends Controller
{

    public function index()
    {
        $terms = Term::latest()->get();
        return view('vendor.terms.index', compact('terms'));
    }

    // public function show($id)
    // {
       
    //     $terms = Term::findOrFail($id);
    //     return view('vendor.terms.show', compact('terms'));
    // }

    public function edit(Term $term)
    {
        $latestpost = Post::latest()->limit(5)->get();
        $latestCategory = Category::latest()->limit(5)->get();
        return view('vendor.terms.edit', compact('term', 'latestpost', 'latestCategory'));
    }

    public function update(Request $request, Term $term)
    {

        $request->validate([
            'terms' => 'required',
        ]);

        $term = Term::first();
        
        $term->update($request->all());
        return redirect()->back()->with('success', 'Term updated successfully');
    }
}
