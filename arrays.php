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

// Задача 5 слайд 15 (урок 5-6 PHP)
// Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика. 
// Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.
echo '<br>' 
. '<b>Задача 5 слайд 15 (урок 5-6 PHP)</b>' 
. '<br>'
. 'Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика. Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.'
.'<br>';

$subjects = [
    'математика', 
    'физика', 
    'химия', 
    'информатика'
];

$students = [
    'Силуанов', 
    'Набиуллина', 
    'Греф', 
    'Песков', 
    'Орешкин'
];

foreach ($students as $student){
    foreach ($subjects as $value) {
        $tmp[$value] = mt_rand(2, 5); // присваивается рандомная оценка от 2 до 5
        $arr[$student] = $tmp; //формируется итоговый массив со студентами и их оценками
    }
} 

foreach ($arr as $items){
    foreach ($items as $nameSubject => $grade){
        $arrSubjects[$nameSubject] += $grade; //формируется массив с предметами и суммой оценок по ним
    }
}

echo '<pre>';
print_r($arr);
echo '</pre>';

foreach ($arrSubjects as $name => $sumGrade) {
    $average = $sumGrade / count($students); // получаем среднее значение по предметам
    echo $name . ' - среднее значение ' . $average 
    . ', сумма ' . $sumGrade 
    . '<br>';
}

// Задача 6 слайд 15 (урок 5-6 PHP)
// Известна среднемесячная температура воздуха на следующих островах Карибского моря: 
// Куба, Тринидад, Ямайка, Гаити. 
// Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.
echo '<br>' 
. '<b>Задача 6 слайд 15 (урок 5-6 PHP)</b>' 
. '<br>'
. 'Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.'
.'<br>';

$island = [
    'Куба', 
    'Тринидад', 
    'Ямайка', 
    'Гаити'
];

$mounths = [
	'Январь',
	'Февраль',
	'Март',
	'Апрель',
	'Май',
	'Июнь',
	'Июль',
	'Август',
	'Сентябрь',
	'Октябрь',
	'Ноябрь',
	'Декабрь'
];

foreach ($mounths as $mounth){
    foreach ($island as $value) {
        $tmp1[$value] = mt_rand(1, 40); // присваивается рандомная температура от 1 до 40 градусов
        $arr1[$mounth] = $tmp1; //формируется итоговый массив с островами и месячной температурой воздуха
    }
} 

echo '<pre>';
print_r($arr1);
echo '</pre>';

foreach ($arr1 as $mounth => $items) {
    $max = 0;
    foreach($items as $v) {
        if($v > $max) {
            $max = $v;
        }  
    }
    $result[$mounth] = $max;
}

echo 'Новый массив:' . '<br>';
echo '<pre>';
print_r($result);
echo '</pre>';

// Задача 7 слайд 15 (урок 5-6 PHP)
// Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца максимальный элемент. 
// Найти произведение этих элементов.

echo '<br>' 
. '<b>Задача 7 слайд 15 (урок 5-6 PHP)</b>' 
. '<br>'
. 'Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца максимальный элемент. Найти произведение этих элементов.'
.'<br>';

$row = 5;
$column = 6;
$res = 1;
for ($i = 0; $i < $row; ++$i) {
    for ($j = 1; $j < $column + 1; ++$j) {
        $arr3[$j][$i+1] = mt_rand(0, 9);
        echo $arr3[$j][$i+1] . ' ';
    }
    echo '<br>';   
}

echo '<pre>';
print_r($arr3);
echo '</pre>';

foreach($arr3 as $key => $val ) {
    if($key % 2 == 0) {
        $max = 0;
        foreach ($val as $number){
            if($number > $max){
                $max = $number;
            } 
            
        }
        echo 'максимальное значение ' . $key .' столбца' . " - $max;" . '<br>';
        $res = $res*$max;
    } 

}
echo "произведение элементов: " . $res . '<br>';
// Задача 8 слайд 16 (урок 5-6 PHP)
// Создать двумерный массив произвольной длины, содержащий строковые значения. 
// Необходимо вывести все элементы массива, начинающиеся на А. 

echo '<br>' 
. '<b>Задача 8 слайд 16 (урок 5-6 PHP)</b>' 
. '<br>'
. 'Создать двумерный массив произвольной длины, содержащий строковые значения. Необходимо вывести все элементы массива, начинающиеся на А.'
.'<br>';

$array8 = [
     "фрукты" => [
          "яблоко", "банан", "апельсин", "ананас"
     ],
     "овощи" => [
          "помидор", "морковь", "картофель", "капуста"
     ],
     "зелень" => [
          "Айсберг", "укроп", "мята", "базилик"
     ]
];
echo '<pre>';
print_r($array8);
echo '</pre>';
foreach ($array8 as $key => $value) {
     foreach ($value as $item) {
       if (mb_substr(mb_strtolower($item), 0, 1) === "а") {
          echo $item . "<br/>";
       }
     }
}


// Задача 9 слайд 16 (урок 5-6 PHP)
// Создать двумерный массив, состоящий из чисел. 
// Необходимо вывести общее количество элементов массива и количество элементов массива для каждого измерения.

echo '<br>' 
. '<b>Задача 9 слайд 16 (урок 5-6 PHP)</b>' 
. '<br>'
. 'Создать двумерный массив, состоящий из чисел. Необходимо вывести общее количество элементов массива и количество элементов массива для каждого измерения.'
.'<br>';

$r = 3;
$c = 3;
for ($i = 0; $i < $r; ++$i) {
    for ($j = 0; $j < $c; ++$j) {
        $arr9[$j][$i] = mt_rand(0, 9);
        echo $arr9[$j][$i] . ' ';
    }
    echo '<br>';   
}
$count = 0;
foreach ($arr9 as $item) {
     $count2 = 0;
     foreach ($item as $k => $v) {
         $count ++;
         $count2 ++;
     }
     echo "Количество элементов массива для каждого измерения - " . $count2 . '<br>';  
}
echo '<br>' . "Общее количество элементов массива - $count";
