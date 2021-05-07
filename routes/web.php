<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/home', [UserController::class, 'index']);
Route::post('/logar', [UserController::class, 'logar'])->name('logar');
Route::get('/cadastro', [UserController::class, 'cadastro']);
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/amigos', [UserController::class, 'friends']);


Route::get('/perfil', function () {
    return view('perfil');
});
Route::get('/feed', function () {
    return view('feed');
});
Route::get('/config', function () {
    return view('config');
});
Route::get('/recover', function () {
    return view('Recuperarsenha');
});

Route::get('/msgpvd', function () {
    return view('mensagensPrivadas');
});