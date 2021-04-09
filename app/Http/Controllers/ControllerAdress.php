<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adress;
use App\Models\User;

class ControllerAdress extends Controller
{
    public function saveAdressRegister(Request $request)
    {
        $adress = new Adress();
        $adress->cep = $request->cep;
        $adress->street = $request->street;
        $adress->number = $request->number;
        $adress->complement = $request->complement;
        $adress->district = $request->district;
        $adress->city = $request->city;
        $adress->state = $request->state;
        $adress->save();

        return view('adress.finish-adress-register', compact('adress'));
    }
    public function showAdressRegister()
    {
        $adresses = Adress::all();
        return view('adress.show-adress-register', compact('adresses'));
    }
    public function editAdressRegister($id)
    {
        $adress = Adress::where('id', $id)->first();
        return view('adress.edit-adress-register', compact('adress'));
    }
    public function saveEditedAdressRegister(Request $request)
    {
        $adress = Adress::where('id', $request->id)->first();
        $adress->cep = $request->cep;
        $adress->street = $request->street;
        $adress->number = $request->number;
        $adress->complement = $request->complement;
        $adress->district = $request->district;
        $adress->city = $request->city;
        $adress->state = $request->state;
        $adress->update();
        return redirect(route('showAdressRegister'));
    }
    public function deleteAdressRegister($id)
    {
        Adress::destroy($id);
        return redirect(route('showAdressRegister'));
    }
    public function register()
    {
        return view('user-adress.register-user-adress');
    }
    public function saveRegister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->date = $request->date;
        $user->password = $request->password;
        $user->matriculation_id = $request->matriculation_id;
        $user->save();

        $adress = new Adress();
        $adress->cep = $request->cep;
        $adress->street = $request->street;
        $adress->number = $request->number;
        $adress->complement = $request->complement;
        $adress->district = $request->district;
        $adress->city = $request->city;
        $adress->state = $request->state;
        $adress->user_id = $user->id;
        $adress->save();

        return redirect(route('showRegister'));
    }
    public function showRegister()
    {
        $adresses = Adress::all();
        return view('user-adress.show-register', compact('adresses'));
    }
    public function editRegister($id)
    {
        $adress = Adress::where('id', $id)->first();
        return view('user-adress.edit-register', compact('adress'));
    }
    public function deleteRegister($id)
    {
        Adress::destroy($id);
        return redirect(route('showRegister'));
    }
    public function saveEditedRegister(Request $request)
    {
        $adress = Adress::where('id', $request->id)->first();
        $adress->cep = $request->cep;
        $adress->street = $request->street;
        $adress->number = $request->number;
        $adress->complement = $request->complement;
        $adress->district = $request->district;
        $adress->city = $request->city;
        $adress->state = $request->state;
        $adress->update();
        return redirect(route('showRegister'));
    }
}
