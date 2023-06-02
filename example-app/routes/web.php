<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MainController;

Route::post('/', [MainController::class, 'form']);
Route::get('/', [MainController::class, 'main_page'])->name('main');

Route::get('/teachers', [MainController::class, 'teachers_page'])->name('teachers');

Route::post('/contacts', [MainController::class, 'form']);
Route::get('/contacts', [MainController::class, 'contacts_page'])->name('contacts');

