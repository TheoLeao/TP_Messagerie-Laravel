<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    /*
        Returns users from a conversation 
    */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    /*
        Returns messages from a conversation 
    */
    public function messages()
    {
        return $this->hasMany('App\Message');
    }
}
