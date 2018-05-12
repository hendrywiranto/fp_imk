<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    protected $fillable = [
        'urut',
    ];
    public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }
}
