<?php
namespace application\controllers;
//use application\controllers\Controller;
class controller_main extends Controller
{

	function action_index()
	{	
		$this->view->generate('index.php', 'layout.php');
	}
}