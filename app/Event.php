<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Like;

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

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    //後でViewで使う、いいねされているかを判定するメソッド。
    public function isLikedBy($user): bool {
        return Like::where('user_id', $user->id)->where('event_id', $this->id)->first() !==null;
    }
}
