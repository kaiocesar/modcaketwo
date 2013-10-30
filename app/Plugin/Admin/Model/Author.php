<?php

class Author extends AdminAppModel{

	// public $hasOne = "Post";
	public $hasOne = array(
		"Post" => array(
			"className" => "Post", 
			"conditions" => array("Post.status" => "1"), 
			"dependent" => true
		)
	);



}