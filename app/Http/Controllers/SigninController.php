<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class SigninController extends Controller
{
    public function index(){
        return view('auth.signin');
    }

    public function store(Request $request){
        $atrribute = $request->validate([
            'email' => ['required', 'email'],
            'password' =>['required'],
        ]);

        // dd($atrribute);
        // if(Auth::attempt($atrribute)){
        //     return redirect('/')->with('success');
        // }
        // throw ValidationException::withMessages([
        //     'email' => 'Email anda belum terdaftar',
        // ]);

        $user = User::whereEmail($request->email)->first();
        
        if($user){
            if(Hash::check($request->password, $user->password)){
                Auth::login($user);

                return redirect('/');
            }
            else{
                throw ValidationException::withMessages([
                    'password' => 'Password yang anda isi salah',
                ]);
            }
        }
        throw ValidationException::withMessages([
            'email' => 'Email anda belum terdaftar',
        ]);

    }
}
