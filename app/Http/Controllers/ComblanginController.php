<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tim;

class ComblanginController extends Controller
{
    public function index(){
        return view('comblangin', [
            "title" => "Comblangin Tim",
            "tims" => \App\Models\Tim::all()
        ]);
    }

    public function daftar(){
        session()->flash('daftartim');
        return redirect('/login');
    }

    public function register()
    {
        return view('comblangin.register');
    }
}
