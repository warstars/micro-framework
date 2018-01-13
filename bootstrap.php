<?php

// подключаем файлы ядра
//require_once 'core/model.php';
//require_once 'core/view.php';
//require_once 'core/controller.php';
require_once 'core/func.php';

//require_once 'application/controllers/controller_main.php';

spl_autoload_register(function ($class) {

    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

    if (is_file($path)) {
        require $path;
        return;
    }

    throw new \LogicException(sprintf('Class "%s" not found in "%s"', $class, $path));
});
/*
Здесь обычно подключаются дополнительные модули, реализующие различный функционал:
	> аутентификацию
	> кеширование
	> работу с формами
	> абстракции для доступа к данным
	> ORM
	> Unit тестирование
	> Benchmarking
	> Работу с изображениями
	> Backup
	> и др.
*/

require_once 'core/Orm/ActiveRecord.php';
ActiveRecord::start();

ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('C:\openserver7.0\OpenServer\domains\ololosha\application\models');
    $cfg->set_connections(array(
        'development' => 'mysql://mysql:mysql@localhost/diploma'));
});

include 'core/Route.php';
Route::start(); // запускаем маршрутизатор
