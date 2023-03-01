<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'event_name',
        'sports',
        'detail',
        'image1',
        'image2',
        'image3',
        'image4',
    ];
}
