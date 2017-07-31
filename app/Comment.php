<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
	protected $fillable = ['user_id', 'blog_id', 'content'];
 
	public static $rules = ['content' => 'required'];

	//reverse relationship with user model (createComment)
	public function getUser()
	{
		return $this->belongsTo('User');	
	}

	//reverse relationship with News model (makeComment)
	public function getNews()
	{
		return $this->belongsTo('Blog');
	}
}
