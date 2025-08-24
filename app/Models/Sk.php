<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sk extends Model
{
    protected $table = 'sk';

    protected $fillable = [
        'ketentuan',     
        'reservasi',
    ];
}
