<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';

    protected $fillable = ['tentang','peta_situs','aturan_penggunaan','kontak_kami'];
}
