<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class After extends Model
{
    //

    protected $fillable = [
        'finals_id',
        'bad_sealing',
        'bad_paint',
        'bad_fabrication',
        'color',
        'coating',
        'bad_packging',
        'previous_stage',
        'weep_hole',
    ];

    public function final()
    {
        return $this->belongsTo(Finals::class);
    }
}
