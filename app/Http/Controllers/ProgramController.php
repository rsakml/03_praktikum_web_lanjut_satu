<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function daftarProgram(){
        return view('layouts.program')
                    ->with('halaman','Program');
    }
}
