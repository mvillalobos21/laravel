<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $fillable=['email','avatar', 'user_id'];

    public  function  avatars(){
        return $this->hasMany('App\Avatar');
    }
}
