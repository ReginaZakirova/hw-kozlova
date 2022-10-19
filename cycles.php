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
                    <li class="header__nav-item"><a class="header__nav-link" href="authorization.php">Авторизация</a></li>
               </ul>
          </nav>
     </header>
</body>
</html>

<?php

// Задание 2, слайд 19
// Дана последовательность элементов от 1 до 50. 
// Необходимо сделать курсивом каждый элемент, кратный 3. 
// Числа, одновременно кратные 3 и 5, сделать жирным.
echo '<br>' . "<b>Задание 2, слайд 19</b>" . '<br>';
for ($i = 1; $i <= 50; $i++) { 
    if (($i % 3) == 0) {
        if ($i % 5 != 0){
            echo "<i>" . $i . "</i>" . ' ';
        }
        else{
            echo "<b>" . "<i>" . $i . "</i>" . "</b>" . ' ';
        }
    }
    else {
        echo $i . ' ';
    }
}
echo '<br>';

// Задание 4, слайд 19
// Дана последовательность, состоящая из дробей: 1/1, 4/2, 7/3, 10/4, ... 
// Какое минимальное количество элементов последовательности нужно сложить, чтобы сумма превысила заданное число S > 10? 

echo '<br>' . "<b>Задание 4, слайд 19</b>" . '<br>';
$arr = array(1/1, 4/2, 7/3, 10/4, 13/5, 16/6, 19/7, 22/8, 25/9, 28/10);
$a = 10;
$sum = 0;
$count = 0;
foreach ($arr as $v) {
    $sum += $v;
    $count++;
    if ($sum >= $a) {
        echo "$count - необходимое количество элементов последовательности" . '<br>' . '<br>';
        break;
    }
}


// Задание 1, слайд 20
// Дано произвольное целое положительное число K (). 
// Найти сумму всех четных цифр этого числа. Процедуры и  функции  работы  со строками не использовать.
echo "<b>Задание 1, слайд 20</b>" . '<br>';
$K = 102233164;
$sum = 0;

while ($K > 0) {
    if ($K % 2 == 0) {
        $sum = $sum + $K % 10;
    }
    $K = $K / 10;
}


// for ($i=1; $i <= $K; $i++) {
//     if ($i % 2 == 0) {
//         $sum = $sum + $i;
//     }   
// }
echo "Сумма всех четных цифр равна $sum" . '<br>'. '<br>';

// Задание 1, слайд 21
// Выведите столбец чисел от 5 до 13.
echo "<b>Задание 1, слайд 21</b>" . '<br>';
$i = 5;
echo "Числа от 5 до 13:" . '<br>';
while ($i <= 13) {
    echo $i . '<br>';
    $i++;
}

// Задание 2, слайд 21
// Дано число $num=1000. 
// Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? 
// Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). 
// Решите задачу сначала через цикл while, а потом через цикл for.

// 1000 500 250 125 62.5 31.25
echo '<br>' . "<b>Задание 2, слайд 21 первый вариант (цикл while)</b>" . '<br>';
$num=1000;
$a = 50;
$i = 0;
while ($num > $a) {
    $i++;
    $num = $num / 2;
}
echo $num . '<br>';
echo $i . '<br>';

//Втророй вариант
echo '<br>' . "<b>Задание 2, слайд 21 второй вариант (цикл for)</b>" . '<br>';
$n = 1000;
$j = 0;
for ($n=1000; $n > 50; $n / 2) {
    $n = $n / 2;
    $j++;
}
echo $n . '<br>';
echo $j . '<br>';


//Необходимо создать переменную ($i) и передавать в нее значение. 
//Если в переменную положить 0, то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». 
//Если переменная равна 1, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». 
//Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8». Если переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10. 
echo '<br>' . "<b>Задание 3, слайд 21</b>" . '<br>';
$i = 10;
$k = 2;
$res = $i - $k;
for ($j = 0; $j <= $res; $j++) {
    echo $j . ', ';
}

include ('footer.php');
