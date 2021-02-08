<?php

namespace App;

use App\Users;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['content'];
}
