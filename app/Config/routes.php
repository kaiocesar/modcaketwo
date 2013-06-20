<?php

// default
	Router::connect('/', array('plugin' => 'crm', 'controller' => 'dashboard', 'action' => 'index'));

// Authentication
	Router::connect('/users', array('plugin'=>'KAuth', 'controller' => 'users', 'action' => 'login'));
	
	Router::connect('/users/', array('plugin' => 'Kauth', 'controller' => 'users', 'action' => 'login'));

	Router::connect('/users/:action', array('plugin' => 'KAuth', 'controller' => 'users', 'action' => 'login'));

	require CAKE . 'Config' . DS . 'routes.php';
