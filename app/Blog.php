<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';	
	protected $fillable = ['pic_url', 'title', 'content', 'user_id'];

	public static $rules = [
		'title' => 'required',
		'content' => 'required',
		'pic_url' => 'image'
	];
	
	//reverse relationship with User model (hasWritten)
	public function getUser()
	{
		return $this->belongsTo('User');	
	}

	//relationship with Comment model
	public function getComments()
	{
		return $this->hasMany('Comment');
	}
}
