<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserJukir extends Model
{
    protected $table = "user_jukir";
    public $timestamps = false;
    // public $primaryKey = 'username';
    protected $fillable = ['username','password'];
    public function UserJukirBiodata()
    {
        return $this->hasOne('App\UserJukirBiodata','username','username');
    }
}
