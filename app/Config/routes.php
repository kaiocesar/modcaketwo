<?php
/**
 * Configurações de rotas
 *
 *
 * Neste arquivo, você define a rota para seus controller's e suas action's.
 * Routas são um mecanismo muito imporante, que permite você conecta-las livrimente
 * diferentes url's para o controller e action(function) escolhido.
 *
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

 /**
  * Aqui, conectamos '/' (caminho base ou base path) para o controller chamado 'Pages'
  *	sua ação chamada 'display', e passamos um parametros para selecionar o arquivo de view.
  *	para usar (no caso, '/app/View/Pages/home.ctp')
  */


	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));

/**
 *	...e conectar a url do controller 'Pages'.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));


/**
 *	Carrega todos os plugins de rota. Saiba, Veja na documentação sobre CakePlugin, como 
 *	Como costumizar o carregamento de plugins de rotas. 
 *	@link http://book.cakephp.org/2.0/en/plugins.html
 */

	CakePlugin::routes();


/**
 * Carrega a rota padão do CakePHP. Só remover isto se você não for precisar usar
 * a rota padrão embutida.
 */
	require CAKE . 'Config' . DS . 'routes.php';
