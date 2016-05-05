<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table = 'beritas';

	protected $fillable = ['judul', 'read_more','content','image','id_kategori'];

	public function kategoris(){
		return $this->belongsTo('App\Kategori');
	}
}
