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

    public static function boot() {
        parent::boot();
        self::deleting(function($cosplay) { // before delete() method call this
             $cosplay->components()->each(function($component) {
                $component->delete(); //direct deletion
             });
        });
    }
}
