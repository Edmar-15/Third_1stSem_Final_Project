<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'show'])->name('home');

Route::get('/listahan', [UserController::class, 'listahan'])->name('user.list');

Route::get('/listahan/specific/{name}', [UserController::class,'display'])->name('user.specific');

Route::get('/listahan/add-new-user', [UserController::class, 'create'])->name('user.create');

Route::post('/listahan/add-new-user', [UserController::class, 'add'])->name('user.store');

Route::get('/listahan/edit-user', [UserController::class, 'edit'])->name('user.edit');

Route::get('listahan/update-user/{id}', [UserController::class, 'update'])->name('user.update');

Route::post('/listahan/update-user/{id}', [UserController::class, 'update_user'])->name('user.save_update');

Route::get('/listahan/delete-user', [UserController::class, 'delete_user'])->name('user.delete_user');

Route::post('/listahan/delete-user/{id}', [UserController::class, 'delete'])->name('user.delete');

Route::get('/listahan/delete-user/{id}', [UserController::class, 'delete_prompt'])->name('user.delete_prompt');

Route::get('/rym', function () {
    return view('rymuel');
});