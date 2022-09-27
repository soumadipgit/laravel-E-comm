<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;



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

// Route::get('/registration', function () {
//     return view('login/registration');
// });

Route::get('/',[ProductController::class,'index']);


Route::get('/login', function () {
    return view('login/login');
});
Route::post('/login',[UserController::class,'login']);
Route::get('/logout', function () {
    Session::forget('username');
    return redirect('login');
});

 Route::get('/registration',[UserController::class,'registration_view'])->name('register');
 Route::post('/registration',[UserController::class,'registration'])->name('register');


  Route::get('/verifyEmail', function () {
    return view('login/verifyEmail');
})->name('verifyEmail');
Route::get('/verification/{id}',[UserController::class,'email_verification'])->name('verification');
Route::get('/verifysuccess',[UserController::class,'verifysuccess'])->name('verifysuccess');
Route::post('/emailverify',[UserController::class,'emailverify'])->name('emailverify');



 Route::get('/detail/{id}',[ProductController::class,'detail']);
 Route::post('/add_to_cart',[ProductController::class,'addToCart']);
 Route::get('/search',[ProductController::class,'search']);
 Route::get('/cartlist',[ProductController::class,'cartList']);






