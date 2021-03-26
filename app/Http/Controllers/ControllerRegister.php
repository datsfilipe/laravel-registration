<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerRegister extends Controller
{
    public function saveRegister()
    {
        return view('finish-register');
    }
}
