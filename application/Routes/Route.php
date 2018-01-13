<?php

$router->add('home', '/', 'controller_main:action_index');
$router->add('log', '/admin', 'controller_admin:action_index', 'post');
$router->add('admin', '/admin', 'controller_admin:index');
$router->add('', '/category/create', 'controller_category:create', 'post');