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
}
