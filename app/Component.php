<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    public function cosplay()
    {
        return $this->belongsTo(Cosplay::class);
    }
}
