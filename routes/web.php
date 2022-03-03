<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\Home1Controller;
use App\http\Controllers\ProductController;
use App\http\Controllers\NewsController;
use App\http\Controllers\ProgramController;
use App\http\Controllers\AboutUsController;
use App\http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//halaman home
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [Home1Controller::class, 'home']);


//Halaman Products --route prefix

Route::prefix('/category')->group(function(){
    Route::get('/daftarProduct', [productController::class, 'daftarProduct']);
});



//Halaman News --route param

Route::get('/news', [NewsController::class, 'news']);

Route::get('/news1/{title}', [NewsController::class, 'news1']);


//Halaman Program --route prefix

Route::prefix('program')->group(function(){
    Route::get('/daftarProgram', [ProgramController::class, 'daftarProgram']);
});

//Halaman About Us
Route::get('/about us',[AboutUsController::class,'about1']);

//Halaman Contact Us
Route::resource('contactus', ContactController::class);