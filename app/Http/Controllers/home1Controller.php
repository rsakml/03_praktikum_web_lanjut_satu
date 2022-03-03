<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home1Controller extends Controller
{
    public function home(){
        return view('layouts.home')
                    ->with('halaman','Home');
    }
}
