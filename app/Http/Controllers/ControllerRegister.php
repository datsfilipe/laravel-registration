<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ControllerRegister extends Controller
{
    public function saveRegister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->date = $request->date;
        $user->password = $request->password;
        $user->matriculation_id = $request->matriculation_id;
        $user->save();

        return view('finish-register', compact('user'));
    }

    public function showRegister()
    {
        $users = User::all();
        return view('show-register', compact('users'));
    }
}
