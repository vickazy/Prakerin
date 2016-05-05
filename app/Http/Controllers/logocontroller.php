<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\logo;
use Input;
use Redirect;

class logocontroller extends Controller
{
    public function index(){
    	$logo = logo::all();
    	return view('admin.tambahlogo', compact('logo'));
    }

    public function create(){
    	return view('admin.createlogo');
    }

    public function store(Request $request){
    	$input = $request->all();
    	$file = array('logo' => $request->file('logo') );
    	if ($request->file('logo')->isValid()) {
    		$destinationPath = 'uploads';
    		$extension = $request->file('logo')->getClientOriginalExtension();
    		$namafile = rand(11111,99999).'.'.$extension;
    		$request->file('logo')->move($destinationPath, $namafile);
    		$input['logo'] = $destinationPath. '/'. $namafile;
    		logo::create($input);
    		return Redirect::route('tambahlogo.index')->with('pesan', 'Tambah Logo Berhasil');
    	}
    }

    public function edit($id){
        $logo = logo::find($id);
        return view('admin.editlogo', compact('logo'));
    }

    public function update(Request $request, $id){
        $logo = logo::find($id);
        if ($request->hasFile('logo')) {
            $file = array('logo' => $request->file('logo'));
            if ($request->file('logo')->isValid()) {
                $destinationPath = 'uploads';
                $extension = $request->file('logo')->getClientOriginalExtension();
                $namafile = rand(11111,99999).'.'.$extension;
                $request->file('logo')->move($destinationPath, $namafile);
                $input['logo'] = $destinationPath. '/'. $namafile;
                $logo->update($input);
                return redirect::route('tambahlogo.index')->with('pesan', 'Edit Logo Berhasil');
            }
        }else{
            $logo->update($input);
            return Redirect::route('tambahlogo.index')->with('pesan', 'Edit Logo Berhasil');
        }
    }

    public function destroy($id){
    	$logo = logo::find($id);
    	$logo->delete();
    	return redirect('tambahlogo');
    }
}
