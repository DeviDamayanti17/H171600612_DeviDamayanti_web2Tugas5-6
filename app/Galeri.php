<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table ='galeri';

    protected $fillable = ['judul','isi', 'users_id','galeri_id',];

}
