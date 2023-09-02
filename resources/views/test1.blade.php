<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test №1</title>
    <link rel="stylesheet" href="./styles/test1/style.css">
    <link rel="stylesheet" href="./styles/test1/tablet/style-tablet.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="header-logo">
        <img src="./images/test1/desktop/logo.png" alt="logo" class="logo">
        <img src="./images/test1/desktop/text-logo.png" alt="text-logo" class="text-logo">
    </div>
    <div class="header-info">
        <p>Техническая поддержка: student@skillgate.tj</p>
        <div class="header-info-cabinet">
            <img src="./images/test1/icons/user.png" alt="">

            <ul class="cabinet-menu">
                <li class="dropdown"><a href="#">Махмудов Сорбон</a>
                    <ul class="dropdown-content">
                        <li><img src="./images/test1/icons/cabinet-user.png" alt=""><a href="#">Мой профиль</a></li>
                        <li><img src="./images/test1/icons/cabinet-settings.png" alt=""><a href="#">Настройки</a></li>
                        <li id="exit"><img src="./images/test1/icons/cabinet-exit.png" alt="" > <a href="#">Выход</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>
<div class="side-bar">
    <div class="side-bar-info">
        <img src="./images/test1/icons/side-user.png" alt="side-user.png">
        <h2>Махмудов Сорбон</h2>
        <p>Уровень: Beginner - Elementary</p>
    </div>
    <div class="side-bar-menu">
        <ul>
            <li><img src="./images/test1/icons/side-main.png" alt="side-main.png"><a href="">Главная</a></li>
            <li><img src="./images/test1/icons/side-course.png" alt="side-course.png"><a href="">Курс</a></li>
            <li><img src="./images/test1/icons/side-marks.png" alt="side-marks.png"><a href="">Оценки</a></li>
        </ul>
    </div>
    <div class="side-bar-nav">
        <div class="side-bar-nav-container">
            <div>
                <p>Грамматика</p>
                <img src="./images/test1/icons/nav-grammar.png" alt="nav-grammar.png">
            </div>
            <div>
                <p>Видео</p>
                <img src="./images/test1/icons/nav-video.png" alt="nav-video.png">
            </div>
            <div>
                <p>Словарь</p>
                <img src="./images/test1/icons/nav-vocab.png" alt="nav-vocab.png">
            </div>
            <div>
                <p>Эл. книги</p>
                <img src="./images/test1/icons/nav-elbook.png" alt="nav-elbook.png">
            </div>
            <div>
                <p>Аудиокниги</p>
                <img src="./images/test1/icons/nav-audiobook.png" alt="nav-audiobook.png">
            </div>
            <div>
                <p>Музыка</p>
                <img src="./images/test1/icons/nav-music.png" alt="nav-music.png">
            </div>
            <div>
                <p>Фильмы</p>
                <img src="./images/test1/icons/nav-movie.png" alt="nav-movie.png">
            </div>
            <div>
                <p>Онлайн чат</p>
                <img src="./images/test1/icons/nav-chat.png" alt="nav-chat.png">
            </div>
            <div>
                <p>Cпикинг клуб</p>
                <img src="./images/test1/icons/nav-spclub.png" alt="nav-spclub.png">
            </div>

        </div>
    </div>
    <div class="side-bar-footer">
        <p>Для связи:
            (+992) 987 65 4321</p>
        <p>Мы в социальных сетях:</p>
        <img src="./images/test1/icons/side-social.png" alt="side-social.png">
    </div>
</div>

<div class="test">
    <div class="test-title">
        <h1>Тест №1: Выбрать правильный вариант артикла
            для предложений</h1>
        <span>Урок №1</span>
    </div>
    <div class="test-content">
        <div class="test-content-title">
            <h2>Выберите правильный вариант</h2>
            <p>Вопрос 2 из 10</p>
        </div>

        <div class="test-content-test">
            <h1>This _____ my phone</h1>
            <form class="test-block">
                <label for="">
                    <input type="radio" name="pronoun">
                    a) is
                </label>
                <label for="">
                    <input type="radio" name="pronoun">
                    b) are
                </label>
                <label for="">
                    <input type="radio" name="pronoun">
                    c) some
                </label>
                <label for="">
                    <input type="radio" name="pronoun">
                    d) am
                </label>
                <button>Next</button>
            </form>

        </div>
    </div>
</div>


<script src="./scripts/test1/app.js"></script>
</body>
</html>
