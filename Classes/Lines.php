<?php

class Lines
{
    public function cutFiveSymbol(){
        $str = "добавьте троеточие в конец";
        echo "Исходнач строка: $str" . '<br>';
        if (mb_strlen($str) < 5) {
            echo $str;
        } else {
            echo mb_substr($str, 0, 5) . '...' . '<br>';
        }
    }

    public function replaseLetter() {
        $str2 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur delectus nostrum fuga blanditiis repellat distinctio quibusdam a harum veniam aut?";
        echo $str2 . '<br>';
        echo str_replace(['a', 'b', 'c'], ['1', '2', '3'], $str2) . '<br>';
    }

    public function definePosition() {
        $str3 = 'abc abc abc';
        $arr3 = mb_str_split($str3); // для наглядности: преобразуем строку в массив и выведем его на экран
        print_r($arr3) ;
        echo '<br>' . "Позиция последней буквы 'b' - " . strrpos($str3, 'b') . '<br>';
    }

    public  function explodeWord() {
        $str4 = 'html css php';
        $arr4 = explode(' ', $str4);
        print_r($arr4);
        echo '<br>';
    }

    public function numberDaysBetweenDates() {
        $birthDay = "20-07-1989";
        $interim = date("j-m-Y");
        $bDay = date_create('20-07-1989');
        $today = date_create($interim);
        $diff = date_diff($bDay, $today);
        echo $diff->format('%a дней') . " между $birthDay и $interim";
    }
}