<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function user()
    {   //usersテーブルとのリレーションを定義するuserメソッド
        return $this->belongsTo(App\User::class);
    }

    public function event()
    {   //eventsテーブルとのリレーションを定義するeventメソッド
        return $this->belongsTo(App\Event::class);
    }
}
