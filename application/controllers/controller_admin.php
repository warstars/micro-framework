<?php
namespace application\controllers;
use application\controllers\Controller;
use application\models\Category;
class Controller_Admin extends Controller
{
	function index()
	{
		$new = '';
		$cat = new Category();
		$newcat = $cat::find('all', ['conditions' => ['name']]);
		foreach($newcat as $key => $value)
		{
			$i = 0;
			foreach(array($value) as $gg) {
				foreach ($gg as $vv) {
					$new .= $vv;
				}

			}
		}
		$this->view->generate('admin.php', 'admin.php', $new);
	}
	
	function action_index()
	{
		$this->view->generate('403_view.php', '403_view.php');

	}
}