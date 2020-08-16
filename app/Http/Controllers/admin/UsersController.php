<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use App\User;
use App\Role;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::all();
        return view('admin_system.users.index', compact('users'));
    }
    public function edit(User $user)
    {   
        if(Gate::denies('edit-users')){
            return redirect()->back();
        }
        $roles = Role::all();
        return view('admin_system.users.edit', compact('roles', 'user'));
    }
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        $user->save();
        return redirect()->route('all_users');
    }
    public function destroy(User $user)
    {
        if(Gate::denies('edit-users')){
            return redirect()->back();
        }
        $user->roles()->detach();
        $user->delete();
        return redirect()->back();
    }
}
