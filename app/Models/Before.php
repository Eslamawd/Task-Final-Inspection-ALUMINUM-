<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Before extends Model
{
    //
    protected $fillable = [
        'finals_id',
        'face_size',
        'neck_size',
        'thickness',
        'angle',
        'joint',
        'deformed',
        'surface',
        'bad',
    ];

    public function final()
    {
        return $this->belongsTo(Finals::class);
    }
}
