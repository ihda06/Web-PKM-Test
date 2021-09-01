<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index', [
            "title" => Auth::user()->name,
        ]);
    }

    public function tim()
    {
        return view('profile.tim', [
            "title" => Auth::user()->name,
        ]);
        // if(Auth::user()->role == 0){
        //     return view('profile.notim', [
        //         "title" => Auth::user()->name,
        //     ]);
        // }
        // else{
        //     return view('profile.tim', [
        //         "title" => Auth::user()->name,
        //     ]);
        // }
    }

}
