<?php

class Post extends AppModel{

	public $belongsTo = array(
		"Author" => array(
			"className" => "Author",
			"foreignKey" => "author_id",
		)
	);

}
