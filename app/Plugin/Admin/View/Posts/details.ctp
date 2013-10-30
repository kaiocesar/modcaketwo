<?php 

/**
 * @link http://book.cakephp.org/2.0/en/core-libraries/helpers/html.html
 */
//	echo $this->Html->getCrumbs(' > ', 'Home');


if (count($Post)):
	echo "<h3>". $Post['Post']['title'] ."</h3>";
	echo "<p>". $Post['Post']['body'] ."</p>";

	$date = new DateTime($Post['Post']['created']);

	echo "<i>Created at ". $date->format('d/m/Y H:i:s') ."</i>";
	echo "<br/><b>Escrito por: ". $Post['Author']['name'] ."</b>";

endif;

