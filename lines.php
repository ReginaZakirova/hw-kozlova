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
     <title>Козлова Виктория</title>
</head>
<body>
     <!--        Шапка сайта-->
     <header class="header">
          <div>
               <a href="index.php">
                    <img class="header__logo" src="img/logo.png" alt="logo">
               </a>
          </div>
          <!--        Навигационное меню-->
          <nav class="header__nav">
               <ul class="header__nav-list">
                    <li class="header__nav-item"><a class="header__nav-link" href="table.html">Таблица</a></li>
                    <li class="header__nav-item"><a class="header__nav-link" href="index.php#projects">Проекты</a></li>
                    <li class="header__nav-item"><a class="header__nav-link" href="cycles.php">Циклы</a></li>
                    <li class="header__nav-item"><a class="header__nav-link" href="arrays.php">Массивы</a></li>
                    <li class="header__nav-item"><a class="header__nav-link" href="lines.php">Строки</a></li>
               </ul>
          </nav>
     </header>
</body>
</html>

    <?php
// Задача 1 слайд 20 (урок 7-8 PHP)
// Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. 
// Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.

echo '<br>'
. '<b>Задача 1 слайд 20 (урок 7-8 PHP)</b>' 
. '<br>'
. 'Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.'
.'<br>';

$str = "добавьте троеточие в конец";
echo "Исходнач строка: $str" . '<br>';
if (mb_strlen($str) < 5) {
    echo $str;
} else {
    echo mb_substr($str, 0, 5) . '...' . '<br>'; 
}


// Задача 2 слайд 20 (урок 7-8 PHP)
// Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.

echo '<br>'
. '<b>Задача 2 слайд 20 (урок 7-8 PHP)</b>' 
. '<br>'
. "Дана строка 'str2'. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3."
.'<br>';

$str2 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur delectus nostrum fuga blanditiis repellat distinctio quibusdam a harum veniam aut?";
echo $str2 . '<br>';
echo str_replace(['a', 'b', 'c'], ['1', '2', '3'], $str2) . '<br>';


// Задача 3 слайд 20 (урок 7-8 PHP)
// Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.

echo '<br>'
. '<b>Задача 3 слайд 20 (урок 7-8 PHP)</b>' 
. '<br>'
. "Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'."
.'<br>';

$str3 = 'abc abc abc';
$arr3 = mb_str_split($str3); // для наглядности: преобразуем строку в массив и выведем его на экран
print_r($arr3) ; 
echo '<br>' . "Позиция последней буквы 'b' - " . strrpos($str3, 'b') . '<br>';


// Задача 4 слайд 20 (урок 7-8 PHP)
// Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.

echo '<br>'
. '<b>Задача 4 слайд 20 (урок 7-8 PHP)</b>' 
. '<br>'
. "Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива."
.'<br>';

$str4 = 'html css php';
$arr4 = explode(' ', $str4);
print_r($arr4);
echo '<br>';


// Задача 5 слайд 20 (урок 7-8 PHP)
// В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). 
// Определите количество дней между датами.

echo '<br>'
. '<b>Задача 5 слайд 20 (урок 7-8 PHP)</b>' 
. '<br>'
. 'В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами.'
.'<br>';

$birthDay = "20-07-1989";
$interim = date("j-m-Y");
$bDay = date_create('20-07-1989');
$today = date_create($interim);
$diff = date_diff($bDay, $today);
echo $diff->format('%a дней') . " между $birthDay и $interim";






