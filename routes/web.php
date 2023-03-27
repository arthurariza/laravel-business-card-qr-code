<?php

use App\Http\Controllers\BusinessCardsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('business-card/{business_card:slug}', [BusinessCardsController::class, 'show'])->name('business-cards.show');
Route::get('/generate', [BusinessCardsController::class, 'create'])->name('business-cards.create');
Route::post('/generate', [BusinessCardsController::class, 'store'])->name('business-cards.store');

