<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';	

    protected $hidden = ['password'];

    protected $fillable = ['user_id', 'city', 'state', 'phone', 'address', 'pic_url'];

    public function getsUser()
    {
    	return $this->belongsTo('User');
    }

}
