<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $fillable = [
        'name', 'path', 'type',
    ];
    public function pertemuan()
    {
        return $this->belongsTo('App\Pertemuan');
    }
}
