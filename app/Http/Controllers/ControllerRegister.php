<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerRegister extends Controller
{
    public function saveRegister(Request $request)
    {
        $name = $request -> name;
        $date = $request -> date;
        $password = $request -> password;
        $id = $request -> id;
        return view('finish-register', compact('name', 'date', 'password', 'id'));
    }
}
