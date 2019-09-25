<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cosplay extends Model
{
    protected $fillable = [
        'image',
        'name',
        'description',
        'category',
        'price',
        'user_id'
    ];

    public function components()
    {
        return $this->hasMany(Component::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
