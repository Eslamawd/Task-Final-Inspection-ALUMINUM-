<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Finals extends Model
{
    
    //
    protected $fillable = [
        'customer_name',
        'project',
        'quality_inspector',
    ];

    public function before()
    {
        return $this->hasMany(Before::class, 'finals_id');
    }
    public function after()
    {
        return $this->hasMany(After::class, 'finals_id');
    }


}
