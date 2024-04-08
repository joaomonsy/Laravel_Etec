<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function (){
    return view('inicio');
});

Route::get('/departamentos', function (){
    return view('departamentos');
});

Route::get('/cursos', function (){
    return view('cursos');
});


Route::get('/instituicao', function (){
    return view('instituicao');
});

Route::get('/vestibulinho', function (){
    return view('vestibulinho');
});

Route::get('/sobrenos', function (){
    return view('sobrenos');
});

Route::get('/oportunidade', function (){
    return view('oportunidade');
});

require __DIR__.'/auth.php';
