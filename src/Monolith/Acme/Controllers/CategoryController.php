<?php 

namespace Monolith\Acme\Controllers;

class CategoryController
{
	public function __construct()
	{

	}

	public function getAction($id)
	{
		echo "category : ".$id;
	}
}
