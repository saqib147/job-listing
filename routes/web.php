<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

Route::get('/', [ListingController::class, 'index']);

// Show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// create a new listing
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');
// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest')->name('register');
// Create new user
Route::post('/users', [UserController::class, 'store']);
// Logout user
Route::post('/logout',[UserController::class, 'logout'])->middleware('auth');
// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Authenticate user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


// Get single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);