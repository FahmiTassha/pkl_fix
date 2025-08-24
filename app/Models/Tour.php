<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tour';

    protected $fillable = [
        'nama',     
        'tempat',
        'harga',
        'gambar',
        'deskripsi',
        'destinasi',
        'include',
    ];
}
