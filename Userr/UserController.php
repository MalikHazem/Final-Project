<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Models\User;
use App\Models\Permission;

    class UserController extends Controller
    {
    public function users()
    {
        $users = User::get();
        return view('users.user',compact('users'));
    }

    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect("/users");
    }
    public function logout()
    {
        if (Auth::user())
        {
            Auth::logout();
        }
        return redirect('/login');
    }

}
