<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $table = 'bids';
	protected $fillable = ['user_id', 'deal_id', 'price', 'accepted'];
 
	public static $rules = 
	[
		'price' => 'required|min:0'
	];

	//reverse relationship with Deal model (getBids)
	public function getDeal()
	{
		return $this->belongsTo('Deal');
	}

	//reverse relationship with User model (hasBids)
	public function getUser()
	{
		return $this->belongsTo('User');
	}

	//function to check if bid is active
	public function isActive()
	{
		return $this->getDeal->available;
	}

	//function to check if bid is the top bid
	public function isTop()
	{
		$deal = $this->getDeal->getBids->orderBy('price', 'desc')
					->take(1)->get();
		return $this == $deal;
	}
}
