<?php

class Auth
{
    public function connectionBD() {
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
        return $mysqli;
    }

    public function getUser($mysqli){
        $sql = "SELECT login, password FROM `city_new`"; //создаем запрос для выборки столбцов логин и пароль из таблицы

        $users = mysqli_query($mysqli, $sql);
        $res = mysqli_fetch_all($users); //ициниализируем переменную  и в нее сохраняем данные из выборки (логины и пароли)
        return $res;
    }
}