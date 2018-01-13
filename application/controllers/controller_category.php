<?php
namespace application\controllers;
use application\controllers\Controller;
use application\models\Category;
class controller_category extends Controller
{

    function create()
    {
//        dd($_POST);
        $cat = new Category();
        $cat::create(['name' => $_POST['mnu_name']]);
        header("Location: http://ololosha/admin");
        die();
    }
}