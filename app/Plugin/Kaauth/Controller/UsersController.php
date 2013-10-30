<?php

class UsersController extends KaauthAppController {


	public function index() {}

	public function login() {
		$this->set('title_for_layout', '::::: Login Admin Area :::::');

		

		if($this->request->is('post')):
			// kaauth/users/login
			if ($this->Auth->login()):
				return $this->redirect($this->Auth->redirectUrl());
			else:
				$this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
			endif;
		endif;
	}

}
