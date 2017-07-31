<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cantBid(Deal $deal)
    {
        $bid = Bid::where('deal_id', $deal->id)->where('user_id', $this->id)->first();

        return $bid or $this->owns($deal);
    }

    public function owns(Deal $deal)
    {
        return $this->id == $deal->user_id;
    }
 
    //relationship with Profile model
    public function getsProfile()
    {
        return $this->hasOne('Profile');
    }

    //write relationship with News model
    public function hasWritten()
    {
        return $this->hasMany('News');
    }

    

    //relationship with Deal model
    public function hasDeals()
    {
        return $this->hasMany('Deal');
    }

    //relationship with Bid model
    public function hasBids()
    {
        return $this->hasMany('Bid', 'user_id');
    }

}
