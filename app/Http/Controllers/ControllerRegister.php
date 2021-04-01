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

    public function editRegister($id)
    {   
        $user = User::where('id', $id)->first();
        return view('edit-register', compact('user'));
    }
    public function saveEditedRegister(Request $request)
    {   
        $user = User::where('id', $request->id)->first();
        $user -> name = $request-> name;
        $user -> date = $request-> date;
        $user -> password = $request-> password;
        $user -> matriculation_id = $request-> matriculation_id;
        $user -> update();
        return redirect(route('showRegister'));
    }

    public function deleteRegister($id)
    {
        User::destroy($id);
        return redirect(route('showRegister'));
    }
}
