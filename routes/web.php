<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResidentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('residents', [ResidentController::class, 'index'])->name('residents.index');
Route::get('residents/create', [ResidentController::class, 'create'])->name('residents.create');
Route::post('residents', [ResidentController::class, 'store'])->name('residents.store');
Route::get('residents/{resident}', [ResidentController::class, 'show'])->name('residents.show');
Route::get('residents/{resident}/edit', [ResidentController::class, 'edit'])->name('residents.edit');
Route::put('residents/{resident}', [ResidentController::class, 'update'])->name('residents.update');
Route::delete('residents/{resident}', [ResidentController::class, 'destroy'])->name('residents.destroy');
