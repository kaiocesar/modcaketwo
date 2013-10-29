<?php 
/**
 *  App Controller 
 *
 */

class CrmAppController extends AppController {

	public function beforeFilter() {
		$this->layout = "crm";
	}

}