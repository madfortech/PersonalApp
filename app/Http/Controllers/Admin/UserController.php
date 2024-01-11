<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
 
    /**
     * Create a new user.
     *
     * @return \Illuminate\View\View
     */
    public function create(): \Illuminate\View\View
    { 
        $users = User::all();
        $roles = Role::pluck('name', 'name');
        $permissions = Permission::pluck('name', 'name');
        return view('admin.users.create', compact('users','roles', 'permissions'));
    }

    
    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse The redirect response.
    */
    public function store(Request $request):RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Save the user to the database
        $user->save();

        // Assign roles to the user
        if ($request->has('roles')) {
            $user->assignRole($request->input('roles'));  // Assign roles based on the input
        }

        // Assign permissions to the user if permissions are provided in the request
        if ($request->has('permissions')) {
            $user->givePermissionTo($request->input('permissions')); 
        }

        // Redirect back with a success message
        return redirect('admin/users/create')
        ->with('status', 'User created successfully');;
    }
    

    /**
     * Display the user details.
     *
     * @param User $user The user object to display.
     * @return \Illuminate\Contracts\View\View The view containing the user details.
    */
    public function show(User $user): \Illuminate\Contracts\View\View
    {
        $user->load('roles');
        return view('admin.users.show')->with(compact('user'));
    }


    /**
     * Delete a user.
     *
     * @param \App\Models\User $user The user to delete.
     *
     * @return \Illuminate\Http\RedirectResponse The redirect response.
    */
    public function destroy(User $user): RedirectResponse
    {
        $adminCount = User::role('super-admin')->count();

        if ($adminCount > 1) {
            $user->syncRoles([]);
            $user->revokePermissionTo(Permission::all());
            return redirect('admin/users/create')
                ->with('status', 'User removed successfully');
        } else {
            // You might want to handle the case where there's only one admin differently,
            // for example, by displaying a message indicating that there must be at least one admin.
            return redirect('admin/users/create')
                ->with('status', 'Cannot remove the last admin user');
        }
        // $user->syncRoles([]);
        // $user->revokePermissionTo(Permission::all());
        // return redirect('admin/users/create')
        // ->with('status', 'User removed successfully');

    }

}
