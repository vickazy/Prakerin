<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\slide;
use Redirect;
use Input;


class slidecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        $slides = slide::orderBy('id')->paginate(3);
        return view('admin.tambahslide', compact('slides')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.createslide');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $file = array('image' => $request->file('image'));
        if ($request->file('image')->isValid()) {
            $destinationPath = 'uploads'; // upload path
            $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renaming image
            $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
            $input['image'] =$destinationPath. '/'.$fileName;
            slide::create( $input );
            return Redirect::route('tambahslide.index')->with('message', 'Tambah Slide Berhasil');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $slide = slide::find($id);
        return view('admin.editslide', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $slide = slide::find($id);
    $input = $request->all();
    
    if ($request->hasFile('image'))
    {
        $file = array('image' => $request->file('image'));
        if ($request->file('image')->isValid()) {
        $destinationPath = 'uploads/'; // upload path
        $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renaming image
        $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
        $input['image'] = $destinationPath.$fileName;
        $slide->update($input); 
        return Redirect::route('tambahslide.index')->with('pesan', 'Edit Slide Berhasil');
        }
    }else{
    $slide->update($input); 
    return Redirect::route('tambahslide.index')->with('pesan', 'Edit Slide Berhasil');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $slide = slide::find($id);
        $slide->delete();
        return redirect('tambahslide');
    }
}
