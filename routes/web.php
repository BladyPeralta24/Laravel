<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/', function(){
    return view('index');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
}); */

Route::get('/', [CursoController::class, 'index'])->name('pri');

Route::get('/contacto', [CursoController::class, 'create'])->name('con');

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usr');

Route::get('/blog', [CursoController::class, 'show'])->name('blg');



// Route::view('/', 'principal') -> name('pri');
// Route::view('/usuarios', 'usuarios') -> name('usr');
// Route::view('/blog', 'blog') -> name('blg');
// Route::view('/contacto', 'contacto') -> name('con');
