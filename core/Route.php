<?php
//namespace core;
use core\Routing\Router;
use core\Routing\MatchedRoute;

/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/

class Route
{

    static function start()
    {
//        dd($_POST);
//        if (isset($_GET['token']) or isset($_POST['token']))
//        {
//            dd($_SESSION, $_GET);
//            $token = token();
//            if($token == false){
//                new MatchedRoute('controller_404:action_index');
//            }
//        }

        try {
            $router = new Router(GET_HTTP_HOST());

            foreach (glob('../application/Routes/*.php') as $item) {
                require $item;
            }

            $route = $router->match(GET_METHOD(), GET_PATH_INFO());
//            dd($route);
            if (null == $route) {
                $route = new MatchedRoute('controller_404:action_index');
            }

            list($class, $action) = explode(':', $route->getController(), 2);
            $class = "application\\controllers\\" . $class;
            call_user_func_array(array(new $class($router), $action), $route->getParameters());

        } catch (Exception $e) {

            header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);

            echo $e->getMessage();
            echo $e->getTraceAsString();
            exit;
        }
    }
}
