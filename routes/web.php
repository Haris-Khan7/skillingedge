<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/manufacturing-partner', [PageController::class, 'manufacturingPartner'])->name('manufacturing-partner');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/it-team', [PageController::class, 'itTeam'])->name('it-team');
Route::get('/rd', [PageController::class, 'rd'])->name('rd');
Route::get('/career', [PageController::class, 'career'])->name('career');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
