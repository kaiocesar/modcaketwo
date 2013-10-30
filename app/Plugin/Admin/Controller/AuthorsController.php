<?php


class AuthorsController extends AdminAppController {

	public function index() {
		$this->set('title_for_page', 'All authors');
		// $this->modelClass = "Post";
		// $Post = $this->Post->find("all");
	}

	public function add() {
		$this->set('title_for_page', 'add a new authors');
	}

}