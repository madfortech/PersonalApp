<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PermissionsController extends Controller
{ 
    /**
     * Create a new permissions.
     *
     * @return \Illuminate\View\View
    */
    public function create(): \Illuminate\View\View
    { 
        $permissions = Permission::all();
        return view('admin.permissions.create',compact('permissions'));
    }

     /**
     * Store a new permissions.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse The redirect response.
    */
    public function store(Request $request):RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'guard_name' => 'required',
        ]);

        $permission = new Permission([
            'name' => $validatedData['name'],
            'guard_name' => $validatedData['guard_name'],
        ]);

        // Save the permissions to the database
        $permission->save();
 
        // Redirect back with a success message
        return redirect('permissions/create')
        ->with('status', 'Permission created successfully');;
    }
    
    
}
