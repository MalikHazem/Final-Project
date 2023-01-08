<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Models\User;
use App\Models\Permission;

    class UserController extends Controller
    {

    public function index()
    {
        $users = User::all();
        return view('users.user',compact('users'));
    }

    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect("/Users");
    }
    public function edit($id)
    {
        $users = User::find($id);
        $permissions = Permission::get();
        return view("users.edit", compact('users', 'permissions'));
    }

    public function update(Request $request, $id)
    {

/*
        $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email'
            ],
            [
                'first_name.required' => 'الاسم مطلوب',
                'last_name.required' => 'الاسم مطلوب',
                'permissions.required' => 'صلاحية مطلوب',
                'email.required' => 'البريد الالكتروني مطلوب',
                'email.email' => 'مطلوب @',
            ]
        );
        */
        $users = User::find($id);
        $users->first_name = $request->first_name;
        $users->last_name = $request->last_name;
        $users->email = $request->email;
        // $user->password = bcrypt(request()->password);
        $users->permissions = $request->permission_id;
        $users->save();

        return redirect("/Users");
    }

    public function PasswordEdit()
    {
        return view("users.password");
    }

    public function PasswordUpdate(Request $request)
    {
//        return $request;
//        $request->validate([
//            "old_password"=>"required|min:6|max:30",
//            "password"=>"required|min:6|max:30",
//            "confirm_password"=>"required|same:password"
//        ]);

        $request->validate(
            [
                'old_password' => 'required',
                'password' => 'required|min:6|max:30',
                'confirm_password' => 'required|same:password',
            ],
            [
                'old_password.required' => 'كلمة المرور القديمة مطلوبة',
                'password.required' => 'كلمة المرور الجديدة مطلوبة',
                'confirm_password.required' => 'تاكيد كلمة المرور الجديدة مطلوب',
                'confirm_password.same' => 'كلمة المرور غير مطابقة',
                'password.min' => 'كلمة المرور اقل من 6',
            ]
        );
//      $this->validate($request, $rules, $customMessages);
        $id = Auth::user()->id;
        $user = User::find($id);
        $current_user = auth()->user();
        if (Hash::check($request->old_password, $current_user->password)) {
            $user->update(['password' => bcrypt(request()->password)]);
            $user = User::get();
            return redirect("/users");
        } else {
            echo Form::label('l_old_password', 'old password error');
        }
    }

    public function logout()
    {
        if (Auth::user()) {
            Auth::logout();
        }
        return redirect('/Vartgallery');
    }

}
