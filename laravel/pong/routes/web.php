<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ListingController;



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

//Route::get('/events', [EventsController::class, 'index'])->name('events');

//All Listings
Route::get('/', [ListingController::class, 'index']);

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/guide', function(){
    return view('guide');
});

Route::get('/events', function(){
    return view('events');
});
