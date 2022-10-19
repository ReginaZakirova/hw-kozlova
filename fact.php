<?php
session_start();
$_SESSION['page'] = 'fact.php';
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
    <title>FACT</title>
</head>
<body>
<h1>Ты на странице ФАКТ</h1>
<a class="link__bitrix" href="./authorization.php">На страницу авторизации</a>

</body>
</html>