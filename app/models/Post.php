<?php

class Post extends BaseModel {

	protected $table = "posts";

	public static $rules = array(
    	'title'      => 'required|max:10',
    	'description'       => 'required|max:10'
	);

	public function user()
	{
	    return $this->belongsTo('User');
	}

}
