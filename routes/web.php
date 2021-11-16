<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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


//login e logout
Route::get('/', function () {
    return view('login', ['page' => 'login']);
})->name('login');

Route::get('/login', [UsersController::class, 'login'])->name('login');
Route::post('/login', [UsersController::class, 'login']);

Route::get('/logout', [UsersController::class, 'logout'])->name('logout');


//cadastro
Route::get('/cadastro', [UsersController::class, 'create'])->name('cadastro');
Route::post('/cadastro', [UsersController::class, 'insert'])->name('cadastro');


//menu principal
Route::get('/site', [IndexController::class, 'index'])->name('site.index');


//edição de perfil
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');


//quadro 
Route::get('/site/quadro', [BoardController::class, 'index'])->name('site.quadro');

