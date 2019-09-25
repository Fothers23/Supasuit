<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $fillable = [
        'name',
        'type',
        'price',
        'shop',
        'cosplay_id'
    ];

    public function cosplay()
    {
        return $this->belongsTo(Cosplay::class);
    }
}
