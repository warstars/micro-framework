<?php

namespace core;

use core\View;

class Controller {
	
	public $model;
	public $view;
	
	function __construct()
	{
		$this->view = new View();
	}
	
	// действие (action), вызываемое по умолчанию
	function action_index()
	{
		// todo	
	}
}
