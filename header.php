<?php
$header = '<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles/reset.css">
     <link rel="stylesheet" href="styles/style.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     <title>Козлова Виктория</title>
</head>
<body>
     <header class="header">
          <div>
               <a href="index.php">
                    <img class="header__logo" src="img/logo.png" alt="logo">
               </a>
          </div>
          <nav class="header__nav">
               <ul class="header__nav-list">
                    <li class="header__nav-item"><a class="header__nav-link" href="table.html">Таблица</a></li>
                    <li class="header__nav-item"><a class="header__nav-link" href="#projects">Проекты</a></li>
                    <li class="header__nav-item"><a class="header__nav-link" href="cycles.php">Циклы</a></li>
                    <li class="header__nav-item"><a class="header__nav-link" href="arrays.php">Массивы</a></li>
                    <li class="header__nav-item"><a class="header__nav-link" href="lines.php">Строки</a></li>
                    <li class="header__nav-item"><a class="header__nav-link" href="authorization.php">Авторизация</a></li>
               </ul>
          </nav>
     </header>';
echo $header;
?>