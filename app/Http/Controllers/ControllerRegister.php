<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ControllerRegister extends Controller
{
    # User Functions

    public function saveUserRegister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->date = $request->date;
        $user->password = $request->password;
        $user->matriculation_id = $request->matriculation_id;
        $user->save();

        return view('user.finish-user-register', compact('user'));
    }
    public function showUserRegister()
    {
        $users = User::all();
        return view('user.show-user-register', compact('users'));
    }
    public function editUserRegister($id)
    {   
        $user = User::where('id', $id)->first();
        return view('user.edit-user-register', compact('user'));
    }
    public function saveEditedUserRegister(Request $request)
    {   
        $user = User::where('id', $request->id)->first();
        $user -> name = $request-> name;
        $user -> date = $request-> date;
        $user -> password = $request-> password;
        $user -> matriculation_id = $request-> matriculation_id;
        $user -> update();
        return redirect(route('showUserRegister'));
    }
    public function deleteUserRegister($id)
    {
        User::destroy($id);
        return redirect(route('showUserRegister'));
    }
}
