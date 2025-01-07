<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\MdBookingController;
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

Route::get("", [MainController::class, "index"]);
Route::get("detail/{md_tour_id}", [MainController::class, "detail"]);
Route::get('detail/{md_tour_id}/booking', [MdBookingController::class, 'booking'])->name('booking.form');
Route::post('detail/{md_tour_id}/booking', [MdBookingController::class, 'store'])->name('booking.store');

