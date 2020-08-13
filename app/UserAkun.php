<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAkun extends Model
{
    protected $table = "user_akun";
    public $timestamps = false;
    protected $primaryKey = "username";
    protected $fillable = ['username','password'];
    public function UserBiodata()
    {
        return $this->belongsTo('App\userbiodata','id','username');
    }
    public function UserKendaraan()
    {
        return $this->belongsTo('App\UserKendaraan','username','username');
    }
}
