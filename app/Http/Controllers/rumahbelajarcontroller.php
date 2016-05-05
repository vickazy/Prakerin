<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\content;
use App\berita;
use App\logo;
use App\slide;
use App\Kategori;
use App\Menu;

class rumahbelajarcontroller extends Controller
{
    public function index(){
        $data = array(
            'content' => content::all(), 
            'berita' => berita::orderBy('id','desc')->paginate(3),
            'logo' => logo::all(),
            'slide' => slide::all(),
        );
        return view('rumahbelajar.index', $data);
    }

    public function tampilberita(berita $berita){
    	$logo = logo::all();
    	return view('rumahbelajar.detail', compact('berita','logo'));
    }

    public function tampilkategori($id){
            $data = array(
                'content' => content::all(), 
                'berita' => berita::where('id_kategori', '=', $id)->paginate(3),
                'logo' => logo::all(),
                'slide' => slide::all(),
            );
            return view('rumahbelajar.index', $data);
        
    }

    public function tentang(){
        $logo = logo::all();
        $menu = Menu::all();
        return view('rumahbelajar.tentang', compact('logo','menu'));
    }

    public function kontak(){
        $logo = logo::all();
        $menu = Menu::all();
        return view('rumahbelajar.kontakkami', compact('logo','menu'));
    }

    public function peta(){
        $logo = logo::all();
        $menu = Menu::all();
        return view('rumahbelajar.peta', compact('logo','menu'));
    }

    public function aturan(){
        $logo = logo::all();
        $menu = Menu::all();
        return view('rumahbelajar.aturan', compact('logo','menu'));
    }
    
    public function getNama(){
        $logo = logo::all();
        $input = Input::get('cari');
        $nama = berita::where('judul', 'LIKE', '%'.$input.'%')->paginate(3);
        
        return view('rumahbelajar.hasil', compact('nama', 'logo'));
    }
    
}