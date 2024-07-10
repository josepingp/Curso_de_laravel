<?php
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// // variables path
// Route::get('/product/{variableDinamica}', [Controller::class, 'function'])->name('example');
// Route::get('/note/{id}', [NoteController::class, 'index'])->name('note.index');

Route::get('/note', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note/store', [NoteController::class, 'store'])->name('note.store');
Route::get('/note/edit/{note}', [NoteController::class, 'edit'])->name('note.edit');
Route::put('/note/update/{note}',[NoteController::class, 'update'])->name('note.update');
Route::get('/note/show/{note}', [NoteController::class, 'show'])->name('note.show');
Route::delete('note/destroy/{note}', [NoteController::class, 'destroy'])->name('note.destroy');

//RUTAS RESOURCE nos permiten abreviar las rutas
Route::resource('/post', PostController::class);
//te crea todas las rutas necesarias para un crud
//puedes ver las rutas con el comando 'php artisan route:list'
//desoues con el comando 'php artisan make:controller PostController --resource'
//nos crea el controlador con todas las funciones iniciadas
