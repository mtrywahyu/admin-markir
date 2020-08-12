<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class UserJukir extends Model
{
    use SoftDeletes;
    protected $table = "user_jukir";
    public $timestamps = false;
    // public $primaryKey = 'username';
    protected $fillable = ['username','password'];
    public function UserJukirBiodata()
    {
        return $this->hasOne('App\UserJukirBiodata','username','username');
    }
}
