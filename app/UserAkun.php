<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAkun extends Model
{
    use SoftDeletes;
    protected $table = "user_akun";
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $dates = ['deleted_at'];
    public function UserBiodata()
    {
        return $this->belongsTo('App\userbiodata','id','username');
    }
    public function UserKendaraan()
    {
        return $this->belongsTo('App\UserKendaraan','username','username');
    }
}
