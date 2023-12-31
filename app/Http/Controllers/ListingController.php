<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listing = Listing::latest()->filter(request(['tag', 'search']))->paginate(4);
        return response()->view('listings.index', ['listings' => $listing]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('listings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email', Rule::unique('listings', 'email')],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {

            $data['logo'] = $request->file('logo')->store('logos', 'public');

        }

        $data['user_id'] = auth()->user()->id;

        Listing::create($data);

        return response()->redirectToRoute('index')->with('success', 'Listing Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        return response()->view('listings.show', ['listing' => $listing]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        return response()->view('listings.edit', ['listing' => $listing]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {
        $data = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {

            $data['logo'] = $request->file('logo')->store('logos', 'public');

        }

        $listing->update($data);

        return response()->redirectToRoute('listing.show', $listing->id)->with('success', 'Listing Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();

        return response()->redirectToRoute('index')->with('success', 'Listing Deleted');
    }

    public function manage()
    {

        $listings = auth()->user()->listings()->get();

        return response()->view('listings.manage', ['listings' => $listings]);
    }
}