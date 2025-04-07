<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all(),
    ]);
});


Route::get('/listing/{id}', function($id){
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

