<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\PostComponent;

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

/* Auth::routes(); */

Route::get('/evento', [App\Http\Controllers\EventController::class, 'index'])->name('evento');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/post', [App\Http\Controllers\HomeController::class, 'post'])->name('post');

Route::get('/haber', function () {
    return view('dale');
});

Route::get('/chat', [App\Http\Controllers\HomeController::class, 'chat'])->name('chat');
