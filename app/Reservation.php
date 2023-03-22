<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $dates = [
        'check_in',
        'check_out',
    ];

    protected $fillable = [
        'representative',
        'club_name',
        'check_in',
        'check_out',
        'meal',
        'request',
        'start_at',
        'end_at',
        'adult_num',
        'child_num',
        'institution',
        'information',
        'user_id',
    ];
}
