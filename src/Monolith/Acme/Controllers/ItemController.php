<?php 

namespace Monolith\Acme\Controllers;

class ItemController
{
	public function __construct()
	{

	}

	public function getAction($catId, $itemId)
	{
		return "category : " . $catId . "<br>item : " . $itemId;
	}
}
