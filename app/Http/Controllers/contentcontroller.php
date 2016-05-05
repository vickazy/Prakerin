<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;
use App\content;

class contentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


    public function index()
    {
        $content = content::all();
        return view('admin.tambahcontent', compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.createcontent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = Input::all();
        $file = array('image' => Input::file('image'));
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads'; 
            $extension = Input::file('image')->getClientOriginalExtension(); 
            $fileName = rand(11111,99999).'.'.$extension; 
            Input::file('image')->move($destinationPath, $fileName); 
            $input['image'] =$destinationPath. '/'.$fileName;
            content::create( $input );
            return Redirect::route('tambahcontent.index')->with('message', 'Tambah Content Berhasil');
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
        $content = content::find($id);
        return view('admin.editcontent', compact('content'));
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
        $content = content::find($id);
        $input = $request->all();
    
    if ($request->hasFile('image'))
    {
        $file = array('image' => $request->file('image'));
        if ($request->file('image')->isValid()) {
        $destinationPath = 'uploads/';
        $extension = $request->file('image')->getClientOriginalExtension(); 
        $fileName = rand(11111,99999).'.'.$extension; 
        $request->file('image')->move($destinationPath, $fileName);
        $input['image'] = $destinationPath.$fileName;
        $content->update($input); 
        return Redirect::route('tambahcontent.index')->with('pesan', 'Edit Berita Berhasil');
        }
    }else{
    $content->update($input); 
    return Redirect::route('tambahcontent.index')->with('pesan', 'Edit Berita Berhasil');
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
        $content = content::find($id);
        $content->delete();
        return redirect('tambahcontent');
    }
}
