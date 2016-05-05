<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';

    protected $fillable = ['judul_kategori'];

    public function beritas(){
    	return $this->hasMany('App\berita');
    }
}
