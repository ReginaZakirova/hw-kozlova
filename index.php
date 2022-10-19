<?php include ('header.php'); 

if(isset($_COOKIE['color'])) {
     $color = $_COOKIE['color'];
}

if($_POST['color']) {
     setcookie('color', $_POST['color'], time()+3600);
     $color = $_POST['color'];
}

session_start();

if(isset($_SESSION['login'])) {
     echo 'Привет, ' . $_SESSION['login'];
}




?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles/reset.css">
     <link rel="stylesheet" href="styles/style.css">
     <title>Козлова Виктория</title>
</head>
<body> -->
     <!--        Шапка сайта-->
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
     <!-- <main>
          <section class="section">
               <div class="container">
                    <div class="container-item sidebar">
                         <div class="sidebar-item">
                              <img src="img/kozlova.JPG" alt="my photo">
                         </div>
                    </div>
                    <div class="container-item about">
                         <div class="about__fio">
                              <h1 class="name">Виктория Козлова</h1>
                         </div>
                         <div class="about__info">
                              <div class="about__info-item about__me">
                                   <ul class="list">Хобби:
                                        <li class="list-item">Тренажерный зал</li>
                                        <li class="list-item">Большой теннис</li>
                                        <li class="list-item">Путешествия</li>
                                   </ul>
                                   <ul class="list">Место работы:
                                        <li class="list-item">Фриланс</li>
                                   </ul>
                                   <ul class="list">Место учебы:
                                        <li class="list-item">Факт (в процессе)</li>
                                        <li class="list-item">freeCodeCamp (JavaScript, в процессе)</li>
                                        <li class="list-item">Основы программирования (сертификат GeekBrains)</li>
                                        <li class="list-item">Основы веб-дизайна (сертификат GeekBrains)</li>
                                        <li class="list-item">Responsive Web Design (freeCodeCamp)</li>
                                   </ul>
                              </div>
                              <div class="about__info-item like">
                                   <ul class="list">Понравилось:
                                        <li class="list-item">Наличие презентаций к урокам</li>
                                        <li class="list-item">Донесение контента до аудитории</li>
                                        <li class="list-item">Обратная связь</li>
                                   </ul>
                                   <ul class="list">Не понравилось:
                                        <li class="list-item">Темп (много времени занимает разбор ошибок группы)</li>
                                   </ul>
                                   <ul class="list">Предложения:
                                        <li class="list-item">В начале практики озвучивать все задания на текущий урок. Кто выполнит - получает похвалу и может быть свободен</li>
                                   </ul>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          
          <section id="projects">
               <div class="projects__title"><h2>Мои проекты</h2></div>
               <div class="grid">
                   <a href="#" target="_blank" class="project">
                       <img class="project-img" src="img/projects/crane.jpg" alt="project_image">
                       <p class="progect-title">Проект "Crane-balka"</p>
                   </a>
                   <a href="#" target="_blank" class="project">
                       <img class="project-img" src="img/projects/batmen.jpg" alt="project image">
                       <p class="progect-title">Проект "Batman"</p>
                   </a>
                   <a href="#" target="_blank" class="project">
                       <img class="project-img" src="img/projects/toxin.jpg" alt="project image">
                       <p class="progect-title">Проект "Toxin"</p>
                   </a>
                   <a href="#" target="_blank" class="project">
                       <img class="project-img" src="img/projects/travel.jpg" alt="project image">
                       <p class="progect-title">Проект "Travel"</p>
                   </a>
                   <a href="#" target="_blank" class="project">
                       <img class="project-img" src="img/projects/mogo.jpg" alt="project image">
                       <p class="progect-title">Проект "MoGo"</p>
                   </a>
                   <a href="#" target="_blank" class="project">
                       <img class="project-img" src="img/projects/greensmart2.jpg" alt="project image">
                       <p class="progect-title">Проект "Greensmart"</p>
                   </a>
                   <a href="#" target="_blank" class="project">
                       <img class="project-img" src="img/projects/slider.jpg" alt="project image">
                       <p class="progect-title">Проект "Slider"</p>
                   </a>
                   <a href="#" target="_blank" class="project">
                       <img class="project-img" src="img/projects/aim.jpg" alt="project image">
                       <p class="progect-title">Проект "Игра "Aim"</p>
                   </a>
               </div> -->
               <!-- <div class="grid_horizontal">
                    <a href="#" target="_blank" class="project">
                        <img class="project-img" src="img/projects/mogo.jpg" alt="project image">
                        <p class="progect-title">Проект "MoGo"</p>
                    </a>
                    <a href="#" target="_blank" class="project">
                        <img class="project-img" src="img/projects/greensmart2.jpg" alt="project image">
                        <p class="progect-title">Проект "Greensmart"</p>
                    </a>
                    <a href="#" target="_blank" class="project">
                        <img class="project-img" src="img/projects/slider.jpg" alt="project image">
                        <p class="progect-title">Проект "Slider"</p>
                    </a>
                    <a href="#" target="_blank" class="project">
                        <img class="project-img" src="img/projects/aim.jpg" alt="project image">
                        <p class="progect-title">Проект "Игра "Aim"</p>
                    </a>
                </div> -->
          <!-- </section>
     </main>     
</body>
</html> -->



<?php
$html = '<main>
          <section class="section">
               <div class="container">
                    <div class="container-item sidebar">
                         <div class="sidebar-item">
                              <img src="img/kozlova.JPG" alt="my photo">
                         </div>
                    </div>
                    <div class="container-item about">
                         <div class="about__fio">
                              <h1 class="name">Виктория Козлова</h1>
                         </div>
                         <div class="about__info">
                              <div class="about__info-item about__me">
                                   <ul class="list">Хобби:
                                        <li class="list-item">Тренажерный зал</li>
                                        <li class="list-item">Большой теннис</li>
                                        <li class="list-item">Путешествия</li>
                                   </ul>
                                   <ul class="list">Место работы:
                                        <li class="list-item">Фриланс</li>
                                   </ul>
                                   <ul class="list">Место учебы:
                                        <li class="list-item">Факт (в процессе)</li>
                                        <li class="list-item">freeCodeCamp (JavaScript, в процессе)</li>
                                        <li class="list-item">Основы программирования (сертификат GeekBrains)</li>
                                        <li class="list-item">Основы веб-дизайна (сертификат GeekBrains)</li>
                                        <li class="list-item">Responsive Web Design (freeCodeCamp)</li>
                                   </ul>
                                   <ul class="list">Дата рождения:
                                   <li class="list-item">20-07-1989</li>
                              </ul>
                              </div>';
                              $aboutCourse =  '
<head>
     <meta charset="UTF-8">
</head>
<div class="about__info-item like">
                    <ul class="list">Понравилось:
                         <li class="list-item">Наличие презентаций для уроков </li>
                         <li class="list-item">Донесение контента до аудитории </li>
                         <li class="list-item">Обратная связь </li>
                    </ul>
                    <ul class="list">Не понравилось:
                         <li class="list-item">Темп (много времени занимает разбор ошибок группы) </li>
                    </ul>
                    <ul class="list">Предложения:
                         <li class="list-item">В начале практики озвучивать все задания текущего урока. Кто выполнит - получает похвалу, может быть свободен </li>
                    </ul>
               </div>';

                              // <div class="about__info-item like">
                              //      <ul class="list">Понравилось:
                              //           <li class="list-item">Наличие презентаций к урокам</li>
                              //           <li class="list-item">Донесение контента до аудитории</li>
                              //           <li class="list-item">Обратная связь</li>
                              //      </ul>
                              //      <ul class="list">Не понравилось:
                              //           <li class="list-item">Темп (много времени занимает разбор ошибок группы)</li>
                              //      </ul>
                              //      <ul class="list">Предложения:
                              //           <li class="list-item">В начале практики озвучивать все задания на текущий урок. Кто выполнит - получает похвалу и может быть свободен</li>
                              //      </ul>
                              // </div>

                         $ostatokHtml = '</div>
                    </div>
               </div>
          </section>
          
          <section id="projects">
               <div class="projects__title"><h2>Мои проекты</h2></div>
               <div class="grid">
                   <a href="#" target="_blank" class="project">
                       <img class="project-img" src="img/projects/crane.jpg" alt="project_image">
                       <p class="progect-title">Проект "Crane-balka"</p>
                   </a>
                   <a href="#" target="_blank" class="project">
                       <img class="project-img" src="img/projects/batmen.jpg" alt="project image">
                       <p class="progect-title">Проект "Batman"</p>
                   </a>
                   <a href="#" target="_blank" class="project">
                       <img class="project-img" src="img/projects/toxin.jpg" alt="project image">
                       <p class="progect-title">Проект "Toxin"</p>
                   </a>
                   <a href="#" target="_blank" class="project">
                       <img class="project-img" src="img/projects/travel.jpg" alt="project image">
                       <p class="progect-title">Проект "Travel"</p>
                   </a>
                   <a href="#" target="_blank" class="project">
                       <img class="project-img" src="img/projects/mogo.jpg" alt="project image">
                       <p class="progect-title">Проект "MoGo"</p>
                   </a>
                   <a href="#" target="_blank" class="project">
                       <img class="project-img" src="img/projects/greensmart2.jpg" alt="project image">
                       <p class="progect-title">Проект "Greensmart"</p>
                   </a>
                   <a href="#" target="_blank" class="project">
                       <img class="project-img" src="img/projects/slider.jpg" alt="project image">
                       <p class="progect-title">Проект "Slider"</p>
                   </a>
                   <a href="#" target="_blank" class="project">
                       <img class="project-img" src="img/projects/aim.jpg" alt="project image">
                       <p class="progect-title">Проект "Игра "Aim"</p>
                   </a>
               </div>
               
          </section>
     </main>     
</body>
</html>';

function calculateDate ($val) {
     $interim = date("j-m-Y");
     $bDay = date_create($val);
     $today = date_create($interim);
     $diff = date_diff($bDay, $today);
     $array['interim'] = $interim;
     $array['diff'] = $diff;
     return $array;
}

$dom = new DOMDocument();

$dom->loadHTML($aboutCourse);
$one = $dom->textContent;
$arrTextOne = explode(' ', $one);

foreach($arrTextOne as $kk => $val){
     $element = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $val);

     if ($element == '' || mb_strlen($val) <= 1 && $val != 'В') {
          continue;
     }
     $arrEvenAndOdd[] = $val;
}

foreach ($arrEvenAndOdd as $kkk => $vvv) {
     if($kkk % 2 == 0) {
          $even[] = $vvv;
     }else {
          $odd[] = $vvv;
     }
}
//окрашивание слов в разные цвета (четные и нечетные)
foreach ($even as $value) {
     $aboutCourse = str_replace($value, "<i style='color:red'>$value</i>", $aboutCourse);
}

foreach ($odd as $value) {
     $aboutCourse = str_replace($value, "<i style='color:green'>$value</i>", $aboutCourse);
}

//окрашивание первой фразы в красный цвет
$html = str_replace("Виктория Козлова", "<h1 class='name' style='color:red'>Виктория Козлова</h1>", $html);
echo $html . $aboutCourse . $ostatokHtml ;


$dom->loadHTML($html);
$d = $dom->textContent;
$arrText = explode(' ', $d);

$dom->loadHTML($ostatokHtml);
$three = $dom->textContent;
$arrTextThree = explode(' ', $three);


$htmlAll = array_merge($arrTextOne, $arrTextThree, $arrText); //объединяем массивы в один для подсчета

//функция подсчета количества слов и гласных букв
function calculateCountWordsAndVowel($arr) {
     $count = 0;
     $vowelAll = 0;
     foreach($arr as $val){
          $element = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $val);
          
          if ($element == '') {
               continue;
          }
          $remainder = str_ireplace(['у','е', 'а', 'о', 'э', 'ё', 'я', 'и', 'ю', 'a', 'e', 'i', 'o', 'u', 'y', ' '], '', $element);
          $vowelElement = mb_strlen($element) - mb_strlen($remainder); 
          $count ++;
          $vowelAll += $vowelElement;
          
     }
     $out['count'] = $count;
     $out['vowel'] = $vowelAll;
     return $out;
}


$result = calculateCountWordsAndVowel($htmlAll); //передаем в функцию $htmlAll и возвращаем результат функции в переменную

echo '<br>'. "На странице: " . $result['count']. " слов";
echo '<br>'. "Должно получится: 99 слов";

echo '<br>';
echo "Гласных букв: " . $result['vowel'];
echo '<br>';

$birthDay = "20-07-1989";
$diffAndInterin = calculateDate($birthDay); //передаем в функцию дату рождения и возвращаем в переменную результат функции
echo $diffAndInterin['diff']->format('%a дней') . " между $birthDay и " . $diffAndInterin['interim']; //выводим результат задания
?>

<!-- ====== session ====== -->
<!-- session_destroy() - уничтожает все данные сессии -->
<?php
// $red = "<body bgcolor='red'>";
// $blue = "<body bgcolor='blue'>";
// $green = "<body bgcolor='green'>";
// $color = ($_POST['do']);

// if (isset($_POST['do'])) {
//     if ($_POST['select'] == 'red') {
//         $color = 'style = "background-color: red;"';
//     }
//     elseif ($_POST['select'] == 'blue') {
//         $color = 'style = "background-color: blue;"';

//     }
//     elseif ($_POST['select'] == 'green') {
//         $color = 'style = "background-color: green;"';
//     }
// }

// if ($color == red) {
//      echo $red;
// } 
// elseif ($color == blue) {
//      echo $blue;
// }
// elseif ($color == green) {
//      echo $green;
// }
// else {
//      echo "<div bgcolor='#fff'>";
// }


?>
<div class="div" style="width: 100%; height: 100px; background-color: <?php echo $color; ?>"></div>
<form name="myForm" action="" method="post">
<select name ="color" value="">
     <option value="">Выберите цвет</option>
     <option value="red">Красный</option>
    <option value="blue">Синий</option>
    <option value="green">Зеленый</option>
</select>
<button class="btn" type="submit">Выбрать</button>
</form>


<?php include ('footer.php');?>





