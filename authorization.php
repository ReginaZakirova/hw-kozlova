<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/authorization.css">
    <title>Авторизация</title>
</head>
<body>
    <!-- Шапка сайта -->
    <!-- <header class="header">
        <div>
            <a href="index.php">
                <img class="header__logo" src="img/logo.png" alt="logo">
            </a>
        </div> -->
        <!--        Навигационное меню-->
        <!-- <nav class="header__nav">
            <ul class="header__nav-list">
                <li class="header__nav-item"><a class="header__nav-link" href="table.html">Таблица</a></li>
                <li class="header__nav-item"><a class="header__nav-link" href="#projects">Проекты</a></li>
                <li class="header__nav-item"><a class="header__nav-link" href="cycles.php">Циклы</a></li>
                <li class="header__nav-item"><a class="header__nav-link" href="arrays.php">Массивы</a></li>
                <li class="header__nav-item"><a class="header__nav-link" href="lines.php">Строки</a></li>
                <li class="header__nav-item"><a class="header__nav-link" href="authorization.php">Авторизация</a></li>
            </ul>
        </nav>
    </header> -->
    <!--        Main-->
    <main>
        <div class="container right-panel-active">
            <!-- Sign Up -->
            <div class="container__form container--signup">
                <form action="#" class="form" id="form1">
                    <h2 class="form__title">Зарегистрироваться</h2>
                    <input type="text" placeholder="Имя" class="input" required>
                    <input type="email" placeholder="Email" class="input">
                    <input type="password" placeholder="Пароль" class="input" required>
                    <button class="btn" type="submit">Зарегистрироваться</button>
                </form>
            </div>

            <!-- Sign In -->
            <div class="container__form container--signin">
                <form action="#" class="form"  method="post" id="form2">
                    <h2 class="form__title">Войти</h2>
                    <input name="name" type="text" placeholder="Имя" class="input" required>
                    <input name="pass" type="password" placeholder="Пароль" class="input" required>
                    <a href="#" class="link">Забыли пароль?</a>
                    <button class="btn" type="submit">Войти</button>
                </form>
            </div>

            <!-- Overlay -->
            <div class="container__overlay">
                <div class="overlay">
                    <div class="overlay__panel overlay--left">
                        <button class="btn" id="signIn">Войти</button>
                    </div>
                    <div class="overlay__panel overlay--right">
                        <button class="btn" id="signUp">Зарегистрироваться</button>
                    </div>
                </div>
            </div>
        </div>
    </main>  
    <script src="js/main.js"></script>   
</body>
</html>


<?php

$name = $_POST['name'];
$pass = md5($_POST['pass']);


$currentName = 'Anna'; //правильный логин
$currentPassword = md5('password'); //правильный пароль

if ($name && $pass) {
    if($name == $currentName && $pass == $currentPassword) {
        header("Location: ./success.php");
    }else {
        header("Location: ./fail.php");
    }
}
unset($_POST);


?>
