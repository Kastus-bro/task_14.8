<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPA Banya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
if (!empty($_POST)) {
    include 'functions.php';

    $login = $_POST['login'] ?? null; //логин
    $password = $_POST['password'] ?? null; //пароль
    $time_input = $_POST['time_input'] ?? null; //время входа на сайт
    $birthday_input = $_POST['date'] ?? null; //дата рождения

    //проверка логина и пароля 
    if (checkPassword($login, $password, $users3)) {
        session_start();      
        $_SESSION['message'] = 'Легкого вам пара, ' . $login . '!';
    }
        else {
            header('Location: login.php');
        }
}
?>

<header>
    <div class="header">
    <h1>Баня и СПА</h1>
        <div class = "msg">
        <?php
            if (!empty($_POST)) {
                echo $_SESSION['message'] . '<br/>';
                echo "Сегодня, Вам скидка! <br/>";
                echo timeMessage($time_input) . '<br/>';
                echo birthdayMessage($birthday_input, $users3, $login) . '<br/>';
                echo '<button onClick="window.location.href=window.location.href">Выход</button>';
            }
            else {
                echo '<form action="login.php" method="get"><button type="submit" width = "100px">Вход на сайт</button></form>';
            }    
        ?> 
        </div>
    </div>   
</header>


    <section class="services">
        <article class="news-news">
            <a href="#">
                <h2 class="new">Баня</h2>
            </a>
            <div class="article-meta">
                Банщик <a href="#">Жора</a>
                Стоимость - 500$
            </div>
            <img src="https://unsplash.com/photos/a-0Qsar9rBg/download?force=true">
            <p>Жора душу выпарит</p>
            <button type="button" class="btn btn-secondary btn-sm">Заказать услугу</button>
        </article>

        <article class="news-news">
            <a href="#">
                <h2 class="new">СПА</h2>
            </a>
            <div class="article-meta">
            СПА-ГУРУ <a href="#">Уруг Апс</a>
            Стоимость - free
            </div>
            <img src="https://unsplash.com/photos/ZbzYDboN7fg/download?force=true">
            <p>Обложат камнями, за отдельную плату словами</p>
            <button type="button" class="btn btn-secondary btn-sm">Заказать услугу</button>
        </article>

        <article class="news-news">
            <a href="#">
                <h2>Массаж</h2>
            </a>
            <div class="article-meta">
            Сила рук <a href="#">Маслобойщица Василиса</a>
            Стоимость - 350$
            </div>
            <img src="https://unsplash.com/photos/a9pFSC8dTlo/download?force=true">
            <p>Похрустим!</p>
            <button type="button" class="btn btn-secondary btn-sm">Заказать услугу</button>
        </article>

        <article class="news-news">
            <a href="#">
                <h2>Стрижка</h2>
            </a>
            <div class="article-meta">
            Цирюльник <a href="#">Борис Бритва</a>
            Стоимость - 77$
            </div>
            <img src="https://unsplash.com/photos/taZSJ6xmt48/download?force=true">
            <p>Доверься и не сопротивляйся!</p>
            <button type="button" class="btn btn-secondary btn-sm">Заказать услугу</button>
        </article>

    </section>


    <footer>
    <div class="links">
        <a href="#">О нас</a>
        <a href="#">Наши достижения</a>
        <a href="#">Наши мастера</a>
        <a href="#">Контакты</a>
    </div>

    <div class="copyright">Copyright © SPA Banya 2022</div>
</body>
</html>