<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    protected $table = 'contents';

	protected $fillable = ['nama', 'image', 'link'];
}
