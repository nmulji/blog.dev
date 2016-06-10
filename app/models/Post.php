<?php

class Post extends BaseModel {

	protected $table = "posts";

	public static $rules = array(
    	'title'      => 'required|max:50',
    	'description'       => 'required|max:1000'
	);

	public function user()
	{
	    return $this->belongsTo('User');
	}

}
