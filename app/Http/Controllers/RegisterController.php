<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Car;

class RegisterController extends Controller
{
    public static function index()
    {
        return view('register');
    }

    public function post(Request $request)
    {
        $data = $this->validate($request, [
            'name' => ['required', 'string', 'max:255', 'min:1'],
            'identity_card' => ['required', 'numeric', 'max:10','unique:users,identity_card'],
            'plate' => ['required', 'string', 'max:6', 'min:6','regex:/[A-Z ]+/', 'unique:cars,plate'],
            'model' =>['required', 'numeric', 'min:1000','max:9999'],
            'brand' => ['required', 'string']
        ]);

        $user = new User([
            'name' => $data['name'],
            'identity_card' => $data['identity_card']
        ]);
        
        $carro = new Car([
            'plate' => $data['plate'],
            'model' => $data['model'],
            'brand' => $data['brand']
        ]);
        
        
        $user->save();
        $carro->user()->associate($user);
        $carro->save();

        return view('register');
        
    }

}
