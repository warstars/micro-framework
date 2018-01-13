<!DOCTYPE html>
<html lang="ru">

<head>

  <meta charset="utf-8">

  <title>Title</title>
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

  <style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>

</head>

<body>
  <div id="overlay"></div>

  <div id="modal_form"><!-- Сaмo oкнo -->
    <h3>авторизация на сайте</h3>
    <form class="auth" action="" method="post">
      <input type="text" name="login" placeholder="Логин">
      <input type="password" name="password" placeholder="Пароль">
      <input type="submit" name="" value="Войти">
    </form>
    <span class="modal_close">X</span> <!-- Кнoпкa зaкрыть -->
    <!-- Тут любoе сoдержимoе -->
  </div>

  <div id="modal_mnu"><!-- Сaмo oкнo -->
    <h3>Изменить пункт меню</h3>
    <form class="mnu_change" action="" method="post">
      <input type="text" name="change_mnu" placeholder="Новое название">
      <input type="submit" value="Изменить">
    </form>
    <span class="modal_close">X</span> <!-- Кнoпкa зaкрыть -->
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
              <li class="modal_call"><a href="#">Пункт меню 4</a></li>
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
          <div class="col-md-3 content_mnu">
            <div class="mnu_header">
              <h3>Админ Панель</h3>
            </div>
            <ul>
              <li class="content_mnu_active"><a href="#" rel="mnu">Редактирование меню</a></li>
              <li><a href="#" rel="stat">Добавить статью</a></li
              </ul>
            </div>
            <div class="col-md-9" id="content_block">
              <div id="change_menu_block">

                <div class="content_block_header">
                  <h2>Добавить пункт меню</h2>
                </div>
                <div class="row">
                  <div id="mnu_name" class="col-md-6">
                    <form action="/category/create" method="post">
                      <input type="text" name="mnu_name" placeholder="Название пункта меню">
                      <input type="submit" value="Добавить">
                    </form>
                  </div>
                  <div id="mnu_block" class="col-md-6">

                    <div class="content_mnu">
                      <ul>
                        <li><a href="#">Версии фреймворка</a><i class="fa fa-pencil show_mnu" aria-hidden="true"></i><i class="fa fa-times" aria-hidden="true"></i></li>
                      </ul>
                    </div>


                  </div>
                </div>
              </div>
            </div>
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


    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/scripts.min.js"></script>
    <script src="js/admin.js"></script>

  </body>
  </html>