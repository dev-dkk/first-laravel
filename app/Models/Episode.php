<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

$timestamps = false;

class Episode extends Model
{
    public function temporadas()
    {
        return $this->belongsTo(Season::class);
    }
}
