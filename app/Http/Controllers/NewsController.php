<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news(){
        return view('layouts.news')
                    ->with('halaman','Berita');
    }

    public function news1($title){
        return view('layouts.news')
                    ->with('halaman', "$title");
    }

}
