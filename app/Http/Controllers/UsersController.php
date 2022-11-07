<?php

namespace App\Http\Controllers;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    public function index()
    {

        $users = User::orderBy('id','asc')->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    public function create()

    {

        $roles = Role::pluck('name','name')->all();

        return view('admin.users.create',compact('roles'));

    }


}
