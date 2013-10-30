<?php


class KaauthAppController extends AppController {

	public function beforeFilter(){
		$this->layout = "Kaauth.login";
	}

}


