<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidUser;


//////////////  crud form with elequent method   //////////////

Route::get('registerpage',[UserController::class,'register']);
Route::post('storess',[UserController::class,'storess']);

Route::get('/login',[UserController::class,'login'])->name('/login');
Route::post('store',[UserController::class,'store'])->name('store');

route::post('logout',[UserController::class,'logout'])->name('logout');


Route::get('insertpage',[UserController::class,'insert'])->middleware(ValidUser::class);
Route::post('save',[UserController::class,'save']);
Route::get('index',[UserController::class,'show'])->middleware(ValidUser::class);
Route::get('viewpage{id}',[UserController::class,'views'])->name('viewpage')->middleware(ValidUser::class);
Route::get('updatepage{id}',[UserController::class,'update'])->name('updatepage')->middleware(ValidUser::class);
Route::post('edit{id}',[UserController::class,'edit'])->name('edit')->middleware(ValidUser::class);
Route::delete('delete{id}',[UserController::class,'delete'])->name('delete');

