<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\berita;
use Redirect;
use Input;
use App\Kategori;

class beritacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    protected $rules = [
        'judul' => ['required'],
        'content' => ['required'],
        'image' => ['required'],
    ];

    public function index()
    {
        $berita = berita::orderBy('id', 'desc')->paginate(3);
        $berita->setPath('tambahberita');
        return view('admin.tambahberita', compact('berita'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $kategori = Kategori::lists('judul_kategori','id_kategori');
        return view('admin.createberita', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request, Kategori $kategori)
    {
        $this->validate($request, $this->rules);
        $input = $request->all();
        $input['read_more'] = (strlen($input['content']) > 220) ? substr($input['content'], 0, 220) : $input['content'];
        $file = array('image' => $request->file('image'));
        if ($request->file('image')->isValid()) {
            $destinationPath = 'uploads'; // upload path
            $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renaming image
            $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
            $input['image'] =$destinationPath. '/'.$fileName;
            berita::create( $input );
            return Redirect::route('tambahberita.index')->with('message', 'Tambah Berita Berhasil');
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
        $berita = berita::find($id);
        $kategori = Kategori::lists('judul_kategori','id_kategori');
        return view('admin.editberita', compact('berita','kategori'));
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
        $berita = berita::find($id);
    $input = $request->all();
    $input['read_more'] = (strlen($input['content']) > 220) ? substr($input['content'], 0, 220) : $input['content'];
    if ($request->hasFile('image'))
    {
        $file = array('image' => $request->file('image'));
        if ($request->file('image')->isValid()) {
        $destinationPath = 'uploads/'; // upload path
        $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renaming image
        $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
        $input['image'] = $destinationPath.$fileName;
        $berita->update($input); 
        return Redirect::route('tambahberita.index')->with('pesan', 'Edit Berita Berhasil');
        }
    }else{
    $berita->update($input); 
    return Redirect::route('tambahberita.index')->with('pesan', 'Edit Berita Berhasil');
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
        $berita = berita::find($id);
        $berita->delete();
        return redirect('tambahberita');
    }
}