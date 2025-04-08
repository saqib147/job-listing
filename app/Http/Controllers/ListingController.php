<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class ListingController extends Controller
{

    // show all listings
    public function index(){
        return view('listings.index', [
            'listings' => Listing::Latest()->filter(request(['tag', 'search']))->paginate(6),
        ]);
    }

    // show single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // show create form
    public function create(){
        return view('listings.create');
    }

    // store listing
    public function store(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            'title' => 'required|max:255',
            'tags' => 'required',
            'company' => 'required|max:255|unique:listings,company',
            'location' => 'required|max:255',
            'email' => 'required|email',
            'website' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        Listing::create($formFields); 


        return redirect('/')->with('message', 'Listing created successfully!');
    }
}
