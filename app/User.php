<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPassword;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','tel', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * パスワードリセット通知の送信
    *
    * @param string $token
    * @return void
    */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function reserves()
    {
        return $this->hasMany('App\Reservation');
    }

    /**
     * Userに紐づくイベントを取得する
     */
    public function events()
    {
        return $this->hasMany('App\Event', 'user_id', 'id');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    public function likeEvents()
    {
        return $this->belongsToMany(
            'App\Event', // リレーションの相手先モデル名
            'likes',    // 中間テーブル
            'user_id',  // 中間テーブルとUserモデルを結びつける
            'event_id'   // 中間テーブルとEventモデルを結びつける
        );
    }
}
