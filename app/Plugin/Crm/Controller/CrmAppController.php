<?php 
/**
 *  App Controller 
 *
 */

class CrmAppController extends AppController {

	// public $components = array(
	// 	'Auth' => array(
	// 		'loginAction' => array(
	// 			'controller' => 'users',
	// 			'action' => 'login',
	// 			'plugin' => 'KAuth',
	// 		),
	// 		'loginRedirect' => array(
	// 			'controller' => 'dashboard',
	// 			'action' => 'index',
	// 			'plugin' => 'KAuth',
	// 		),
	// 	)

	// );

	public function beforeFilter() {
		$this->layout = "crm";
	}
	
}