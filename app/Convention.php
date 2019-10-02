<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convention extends Model
{
    protected $fillable = [
        'name',
        'startDate',
        'endDate',
        'link',
        'location',
        'country'
    ];
}
