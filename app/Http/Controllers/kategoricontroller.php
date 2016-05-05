<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use Input;
use App\Kategori;

class kategoricontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    protected $rules = [
        'judul_kategori' => ['required']
    ];

    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.tambahkategori', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.createkategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $siswa = new Kategori;
        $siswa->judul_kategori = Input::get('judul_kategori');
        $siswa->save();
        return Redirect::route('tambahkategori.index')->with('message', 'Tambah kategori Berhasil');
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
        $kategori = Kategori::find($id);
        return view('admin.editkategori', compact('kategori'));
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
        $kategori = Kategori::find($id);
        $kategori->update($request->all());
        return Redirect::route('tambahkategori.index')->with('pesan', 'Edit Kategori Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect('tambahkategori');
    }
}