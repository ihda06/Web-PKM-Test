<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use stdClass;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(RegistrationRequest $request)
    {
        $attributes = $request->all();

        $attributes['password'] = Hash::make($request->password);
        // $role = new stdClass;
        // $role->role = 0;
        // array_push($attributes,(object)[
        //     "role" => 0
        // ]);
        // dd($attributes);
        
        User::create(array_merge($attributes, [
            'role' => 0
        ]));

        session()->flash('success');

        return redirect('/login');
    }
}
