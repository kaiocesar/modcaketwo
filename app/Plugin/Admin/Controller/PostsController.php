<?php


class PostsController extends AdminAppController {

	public $helpers = array('Html','Form');

	public function index() {
		$Posts = $this->Post->find('all');		

		$this->set('title_for_page', 'All posts');
		$this->set('Posts', $Posts);
	}
	
	public function add() {
		$this->set('title_for_page', 'Add a new post');	
	}

	public function details($id=null) {
		$this->set('title_for_page', 'Details of the post');
		$Post = $this->Post->findById($id);
		$this->set('Post', $Post);
	}

}

