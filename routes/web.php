<?php

use App\Http\Controllers\todocontroller;
use Illuminate\Support\Facades\Route;

Route::get('/',[todocontroller::class,'show'])->name('show');
Route::POST('Save-data',[todocontroller::class,'save'])->name('save.data');
Route::get('romove-data/{dataid}',[todocontroller::class,'remove'])->name('remove.data');
Route::get('update-data/{dataid}',[todocontroller::class,'update'])->name('update.data');
Route::post('edit-data',[todocontroller::class,'edit'])->name('edit.data');

