<?php

require_once(__DIR__."/../vendor/autoload.php");

$routing = array(
	'base_path' => '/',
	'routes'    => array(
		'home'      => array(
			'path'      => '',
			'action'    => 'Monolith\Acme\Controllers\HomeController.getAction',
			'methods'   => 'GET',
			'roles'     => 'anonymous',
		),
		'category'      => array(
			'path'      => 'cat/{id}',
			'action'    => 'Monolith\Acme\Controllers\CategoryController.getAction',
			'methods'   => 'GET',
			'roles'     => 'anonymous',
			'filters'   => array(
				'id'       => '([0-9]+)',
			),
		),
		'item'      => array(
			'path'      => 'cat/{catId}/item/{itemId}',
			'action'    => 'Monolith\Acme\Controllers\ItemController.getAction',
			'methods'   => 'GET',
			'roles'     => 'anonymous',
			'filters'   => array(
				'catId'     => '([0-9]+)',
			),
		),
	),
);

$routerlith = new \Monolith\Routerlith\Routerlith($routing);

$route      = $routerlith->getCurrentRoute();
$response   = $routerlith->dispatch($route, array());

//	Response can be a string or you can implement something more sophisticated
//	It's up to you
echo $response;

//	try me :
//	http://www.mydomainname.com/
//	http://www.mydomainname.com/cat/1
//	http://www.mydomainname.com/cat/1/item/blue-chair
