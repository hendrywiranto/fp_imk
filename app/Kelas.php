<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
        'class_name', 'class_prologue', 'class_time',
    ];
    public function pertemuan()
    {
        return $this->hasMany('App\Pertemuan');
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
