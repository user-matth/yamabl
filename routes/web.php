<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\CondominiumController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('residents', [ResidentController::class, 'index'])->name('residents.index');
Route::get('residents/create', [ResidentController::class, 'create'])->name('residents.create');
Route::post('residents', [ResidentController::class, 'store'])->name('residents.store');
Route::get('residents/{resident}', [ResidentController::class, 'show'])->name('residents.show');
Route::get('residents/{resident}/edit', [ResidentController::class, 'edit'])->name('residents.edit');
Route::put('residents/{resident}', [ResidentController::class, 'update'])->name('residents.update');
Route::delete('residents/{resident}', [ResidentController::class, 'destroy'])->name('residents.destroy');

Route::get('condominiuns', [CondominiumController::class, 'index'])->name('condominiuns.index');
Route::get('condominiuns/create', [CondominiumController::class, 'create'])->name('condominiuns.create');
Route::post('condominiuns', [CondominiumController::class, 'store'])->name('condominiuns.store');
Route::get('condominiuns/{condominium}', [CondominiumController::class, 'show'])->name('condominiuns.show');
Route::get('condominiuns/{condominium}/edit', [CondominiumController::class, 'edit'])->name('condominiuns.edit');
Route::put('condominiuns/{condominium}', [CondominiumController::class, 'update'])->name('condominiuns.update');
Route::delete('condominiuns/{condominium}', [CondominiumController::class, 'destroy'])->name('condominiuns.destroy');
