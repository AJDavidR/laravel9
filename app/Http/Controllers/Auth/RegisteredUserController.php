<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegisteredUserRequest;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use App\Models\User;

class RegisteredUserController extends Controller
{
    public function store(StoreRegisteredUserRequest $request){
        $request->validated();

        User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
        ]);
        
        return to_route('login')->with('status','Account Created');
    }
        // nota
        // $User = User::created([
        //     'name' => $request->name,
        //     'email'=> $request->email,
        //     'password'=> bcrypt($request->password),
        // ]);
        // Auth::login($User); //metodo de login automatico


        // metodo de encriptacion de laravel bcrypt
}
