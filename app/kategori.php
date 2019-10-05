<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
	protected $fillable = [
		'user_id','name','keterangan'
	];
}