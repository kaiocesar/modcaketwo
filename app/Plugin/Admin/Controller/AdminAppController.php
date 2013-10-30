<?php
/**
 * App Controller
 */

class AdminAppController extends AppController {

	/**
	 * AUTHENTICATION
	 * @link http://book.cakephp.org/2.0/en/core-libraries/components/authentication.html
	 */
/*	public $components = array(
		'Auth' => array(
			'loginAction' => array(
				'controller' => 'users',
				'action' => 'login',
				'plugin' => 'kaauth',
			),
			'authError' => 'Você não tem permissão para estar aqui, saia!',
			'authenticate' => array(
				'Form' => array(
					'fields' => array('username' => 'email'),
				)
			)
		)
	);
*/

	public function beforeFilter() {
		$this->layout = "Admin.dashboard";
		$this->set('title_for_page','');
	}

}

