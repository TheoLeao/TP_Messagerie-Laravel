<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;

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
    /* 
        Return all conversations from a user
    */
    public function conversations()
    {
        return $this->belongsToMany('App\Conversation');
    }

    /* 
        Check if a conversation exists with a list of members
        @param $usersList: 
        return boolean

    */

    public function existConversationWith($usersList)
    {

        $usersList = Arr::prepend($usersList, $this->id);

        //Retrieve user objects from their IDs provided in $usersList and insert them into the collection.
        $usersCollect = collect();
        for($i_userList = 0; $i_userList < count($usersList); $i_userList++){
            $usersCollect = $usersCollect->push(User::find($usersList[$i_userList]));
        }

        $conversations = $this->conversations;
        //Check among the conversations if a conversation has exactly the users provided in the parameter.
        foreach ($conversations as $conversation) {
            foreach($usersCollect as $user){
                if(!$conversation->users->contains($user) || count($conversation->users) !== count($usersCollect) ) return false;
            }
        }
        return true;
    }
}
