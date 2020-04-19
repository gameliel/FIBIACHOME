<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PropertyListing;
use Image;

class PropertyListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('propertylisting.index')->with('PropertyListings', PropertyListing::paginate(6));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('propertylisting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'property_status' => 'required',
            'property_type' => 'required',
            'property_price' => 'required',
            'property_area' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'image' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'property_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'property_description' => 'required'
         ]);
 
          $image = $request->file('image');
 
          $new_name = rand() . '.' . $image->
                 getClientOriginalExtension();
         $image->move(public_path('images'), $new_name);
 
         $form_data = array(
             'title' => $request->title,
             'property_status' => $request->property_status,
             'property_type' => $request->property_type,
             'property_price' => $request->property_price,
             'property_area' => $request->property_area,
             'bedroom' => $request->bedroom,
             'bathroom' => $request->bathroom,
             'image' => $new_name,
             'property_address' => $request->property_address,
             'city' => $request->city,
             'state' => $request->state,
             'zip_code' => $request->zip_code,
             'property_description' => $request->property_description,
         );
         Propertylisting::create($form_data);
         return redirect('propertylisting');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
