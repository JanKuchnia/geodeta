<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/uslugi', [ServiceController::class, 'index'])->name('uslugi.index');
Route::get('/uslugi/{service:slug}', [ServiceController::class, 'show'])->name('uslugi.show');
Route::get('/galeria', [GalleryController::class, 'index'])->name('galeria');
Route::get('/opinie', [ReviewController::class, 'index'])->name('opinie');
Route::get('/o-nas', [PageController::class, 'oNas'])->name('o-nas');
Route::get('/kontakt', [PageController::class, 'kontakt'])->name('kontakt');
Route::post('/kontakt', [LeadController::class, 'store'])->name('kontakt.store');
