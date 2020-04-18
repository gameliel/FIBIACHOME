<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submit;
use Image;

class SubmitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('submits.index')->with('submits', Submit::paginate(6));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('submits.create');
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
           'status' => 'required',
           'type' => 'required',
           'price' => 'required',
           'area' => 'required',
           'bedroom' => 'required',
           'bathroom' => 'required',
           'image' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
           'address' => 'required',
           'city' => 'required',
           'state' => 'required',
           'zip_code' => 'required',
           'description' => 'required'
        ]);

         $image = $request->file('image');

         $new_name = rand() . '.' . $image->
                getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        $form_data = array(
            'title' => $request->title,
            'status' => $request->status,
            'type' => $request->type,
            'price' => $request->price,
            'area' => $request->area,
            'bedroom' => $request->bedroom,
            'bathroom' => $request->bathroom,
            'image' => $new_name,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'description' => $request->description,
        );
        Submit::create($form_data);
        return redirect('submits');
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
