<?php

use App\Http\Controllers\Api\V1\BusinessCardsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')->group(function () {
    Route::get('/business-cards', [BusinessCardsController::class, 'index'])->name('api.business-cards.index');
});
