<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    /*
        Returns messages from a conversation 
    */
    public function messages()
    {
        return $this->hasMany('App\Message');
    }
}
