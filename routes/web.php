<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\AuthController;


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
    return view('pages.landing');
})->name('homes');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('blogs', [PostController::class , 'index'])->name('blogs.index');

Route::get('posts/{id}', [PostController::class, 'show'])->name('posts.show');

Auth::routes();
Route::post('register', [AuthController::class, 'register'])->name('user.register');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
