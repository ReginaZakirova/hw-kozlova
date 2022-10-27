<?php
session_start();

if($_POST['submit'] == 'Logout'){
    session_destroy();
    header("Location: ./authorization.php");
}

if(isset($_SESSION['login'])) {
    $login = $_SESSION['login'];
    $page = $_SESSION['page'];
}
//доступы для подключения к бд
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'city';
$db_port = 8889;

//Объектно-ориентированный стиль
// $mysqli = new mysqli(
//     $db_host,
//     $db_user,
//     $db_password,
//     $db_db,
// 	   $db_port
//  );

//процедурный стиль
$mysqli = mysqli_connect($db_host, $db_user, $db_password, $db_db, $db_port);

//$res = $mysqli->query("CREATE TABLE city_new(id INT, login CHAR(20), password CHAR(20))");  //создаем таблицу вручную (не получилось подключиться 
// к БД в mamp)

$sql = "SELECT login, password FROM `city_new`"; //создаем запрос для выборки столбцов логин и пароль из таблицы

$users = mysqli_query($mysqli, $sql);
$res = mysqli_fetch_all($users); //ициниализируем переменную  и в нее сохраняем данные из выборки (логины и пароли)

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
<body class="body">
    <main>

        <?php if($login) :?>

            <div class="hello">
                <h1>Привет, <?php echo $login?>!</h1>
                <?php
                    if ($page) {
                        echo "<h2>Твоя последняя страница, $page</h2>";
                    }
                ?>
                <form action="#" method="post">
                    <input class="btn hello__logout" type="submit" name="submit" value="Logout">
                </form>
                <a class="hello__link" href="./fact.php"><img src="img/arrow-right-solid.svg" class="arrow__right"></img>ФАКТ</a>
                <a class="hello__link" href="./bitrix.php"><img src="img/arrow-right-solid.svg" class="arrow__right"></img></i>Битрикс</a>
            </div>

        <?php else: ?>

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
        <?php endif;?>
    </main>  
    <script src="js/main.js"></script>   
</body>
</html>


<?php
session_start();

$name = $_POST['name'];
$pass = $_POST['pass'];

//$currentName = 'Anna'; //правильный логин
//$currentPassword = md5('password'); //правильный пароль

if ($name && $pass) { 
        //проходимся по массиву с логинами и паролями и сравниваем значения из $_POST c ними
        //в случае успеха, ставим флаг
        $success = false;
        foreach ($res as $value) {
            if($name == $value[0] && $pass == $value[1]){
                $success = true;
            }
        }

        if($success){
            $_SESSION['login'] = $name;
            header("Location: ./authorization.php");
        }else {
            header("Location: ./fail.php");
        }
}
unset($_POST);

//CREATE USER 'vika'@'localhost' IDENTIFIED BY 'password';

//[0] => Mark
//[1] => 432
?>
