<div class="col-md-9" id="content_block">
    <div class="content_block_header">
        <h2>Установка</h2>
    </div>
    <div class="content_block_consist">
        <ul>
            <li><a href="/">WhiteBerry v 0.1</a></li>
        </ul>
    </div>

    <div class="mnu_header">
        <h3># WhiteBerry</h3>
    </div>

    <p>В Изменена дефолтная структура приложения. Теперь все приложение входит в стандарт автоматической загрузки PSR-4 целиком и является более подходящей основой для построения надежного приложения. Рассмотрим основные изменения:</p>

    <h4>Новая структура папок</h4>
    <p>Папки <span>app/models</span> больше нет. Теперь все ваши классы живут в папке <span>app</span>, и по умолчанию находятся в неймспейсе <span>App</span>. Название неймспейса хранится в файле <span>config/namespaces.php</span> и его можно изменить во всех ваших классах сразу артизан-командой <span>php artisan app:name</span>.</p>
</div>