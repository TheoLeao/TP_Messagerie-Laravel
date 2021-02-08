<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;
use App\Helper\Helper;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function getMessagesWithUser($userID){
        $user1 = $this->id;
        $user2 = $userID;
        $messages = Message::where('sender_id', $user1)->where('receiver_id', $user2)
            ->orWhere(function ($query) use ($user1, $user2){
                $query->where('sender_id', $user2)
                    ->where('receiver_id', $user1);
            })->orderBy('created_at', 'desc')->get();
        return $messages;
    }

}
