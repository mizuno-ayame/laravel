<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $dates = [
        'check_in',
        'check_out',
    ];
}
