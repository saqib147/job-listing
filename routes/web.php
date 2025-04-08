<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

Route::get('/', [ListingController::class, 'index']);

// Show create form
Route::get('/listings/create', [ListingController::class, 'create']);
// create a new listing
Route::post('/listings', [ListingController::class, 'store']);

Route::get('/listings/{listing}', [ListingController::class, 'show']);