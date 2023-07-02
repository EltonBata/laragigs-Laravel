<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\SweepstakeController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use GuzzleHttp\Psr7\Uri;
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

Route::get('/', [ListingController::class, 'index'])->name('index');
Route::get('/listings/manage', [ListingController::class, 'manage'])->name('listing.manage')->middleware('auth');
Route::get('/{listing}', [ListingController::class, 'show'])->name('listing.show');
Route::get('/listings/create', [ListingController::class, 'create'])->name('listing.create')->middleware('auth');
Route::post('/listings/store', [ListingController::class, 'store'])->name('listing.store')->middleware('auth');
Route::get('listings/{listing}/edit', [ListingController::class, 'edit'])->name('listing.edit')->middleware('auth');
Route::put('listings/{listing}', [ListingController::class, 'update'])->name('listing.update')->middleware('auth');
Route::delete('listings/{listing}', [ListingController::class, 'destroy'])->name('listing.destroy')->middleware('auth');

