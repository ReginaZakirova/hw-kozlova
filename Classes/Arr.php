<?php

class Arr
{
    public function subjects() {
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

//echo '<pre>';
//print_r($arr);
//echo '</pre>';

        foreach ($arrSubjects as $name => $sumGrade) {
            $average = $sumGrade / count($students); // получаем среднее значение по предметам
            echo $name . ' - среднее значение ' . $average
                . ', сумма ' . $sumGrade
                . '<br>';
        }
    }

    public function averageTemperature() {
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

        //echo '<pre>';
        //print_r($arr1);
        //echo '</pre>';

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
    }

    public function maxElem() {
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
    }

    public function allElementsWithA() {
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
    }

    public function allNumberOfElements() {
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
    }
}