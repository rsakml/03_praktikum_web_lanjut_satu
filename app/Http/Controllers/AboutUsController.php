<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function about1(){
        return view('layouts.about-us')
                    ->with('halaman','About Us');
    }
}
