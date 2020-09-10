<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class UserJukir extends Model
{
    use SoftDeletes;
    protected $table = "user_jukir";
    public $timestamps = false;
    public $primaryKey = 'id';
    protected $fillable = ['username','password','status','no_seri_alat'];
    public function UserJukirBiodata()
    {
        return $this->hasOne('App\UserJukirBiodata','id_jukir','id');
    }
}
