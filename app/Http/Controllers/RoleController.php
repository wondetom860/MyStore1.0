<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //

    public function index(){
        // with('users')->get()
        $roles = Role::all();
        return view('admin.roles.index')->with('roles', $roles);
    }

    public function users(){
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }
}
