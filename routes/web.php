<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
