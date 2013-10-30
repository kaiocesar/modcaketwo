<?php
/**
 * App Controller
 */

class AdminAppController extends AppController {
	public function beforeFilter() {
		$this->layout = "Admin.dashboard";
	}

}

