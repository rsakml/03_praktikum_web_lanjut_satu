<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function daftarProduct(){
        return view('layouts.product')
                    ->with('halaman','Product');
    }
}
