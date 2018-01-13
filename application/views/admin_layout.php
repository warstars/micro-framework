<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">

    <title>Админ панель</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta property="og:image" content="path/to/image.jpg">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">

    <style>body {
            opacity: 0;
            overflow-x: hidden;
        }

        html {
            background-color: #fff;
        }</style>

</head>

<body>
<div id="overlay"></div>

<div id="modal_form"><!-- Сaмo oкнo -->
    <h3>авторизация на сайте</h3>
    <form class="auth" action="/admin" method="get">
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="password" placeholder="Пароль">
        <input type="submit" name="" value="Войти">
    </form>
    <span id="modal_close">X</span> <!-- Кнoпкa зaкрыть -->
    <!-- Тут любoе сoдержимoе -->
</div>
<div id="wrapper">
    <div id="header">
        <div class="container">
            <div class="row" id="header_topline">
                <div class="col-md-4" id="header_logo">
                    <h1><a href="#">WhiteBerry</a></h1>
                </div>
                <div class="col-md-8" id="header_mnu">
                    <ul>
                        <li class="header_mnu_active"><a href="#">Пункт меню 1</a></li>
                        <li><a href="#">Пункт меню 2</a></li>
                        <li><a href="#">Пункт меню 3</a></li>
                        <li class="modal_call"><a href="#">Административная панель</a></li>
                    </ul>
                </div>
            </div>
            <div class="row" id="header_descr">
                <div class="col-md-6" id="header_version">Версии фреймворка: <span>1.1</span></div>
                <div class="col-md-6" id="header_help"><p rel='tooltip' title="Работает">Статус поддержки</p></div>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3" id="content_mnu">
                    <div class="mnu_header">
                        <h3>Вступление</h3>
                        <ul>
                            <li class="content_mnu_active"><a href="#">Версии фреймворка</a></li>
                            <li><a href="#">Руководство по обновлению</a></li>
                            <li><a href="#">Участие в разработке</a></li>
                        </ul>

                        <div class="mnu_header">
                            <h3>Установка</h3>
                            <ul>
                                <li><a href="#">Установка</a></li>
                                <li><a href="#">Настройка</a></li>
                                <li><a href="#">HomeStead</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php include '../application/views/' . $content_view; ?>
            </div>
        </div>
    </div>

    <div id="footer" class="row">
        <div class="container">
            <div class="col-md-3 footer_column">
                <div class="footer_header">
                    <h3>присоединяйтесь</h3>
                </div>
                <ul>
                    <li><a href="#">Чат в Gitter</a></li>
                    <li><a href="#">Сообщество вконтакте</a></li>
                    <li><a href="#">Твиттер</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer_column">
                <div class="footer_header">
                    <h3>ресурсы</h3>
                </div>
                <ul>
                    <li><a href="#">Официальный сайт</a></li>
                    <li><a href="#">Официальный форум</a></li>
                    <li><a href="#">Composer-пакеты Laravel</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer_column">
                <div class="footer_header">
                    <h3>инфо</h3>
                </div>
                <ul>
                    <li><a href="#">Правила</a></li>
                    <li><a href="#">Соглашение</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer_column">
                <div class="footer_header">
                    <h3>свободная колонка</h3>
                </div>
                <ul>
                </ul>
            </div>
        </div>
    </div>
</div>


<link rel="stylesheet" href="css/main.css">
<script src="js/scripts.min.js"></script>

</body>
</html>