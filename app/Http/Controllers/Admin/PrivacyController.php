<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Privacy;

class PrivacyController extends Controller
{
    public function index()
    {
        $item = Privacy::latest()->get();
        return view('vendor.privacy.index', compact('item'));
    }
    
    public function edit(Privacy $privacy)
    {
      
        return view('vendor.privacy.edit', compact('privacy'));
    }

    public function update(Request $request, Privacy $privacy)
    {

        $request->validate([
            'privacy' => 'required',
        ]);

        $item = Privacy::first();
        
        $item->update($request->all());
        return redirect()->back()->with('success', 'Privacy updated successfully');
    }
}
