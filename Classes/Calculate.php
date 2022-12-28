<?php

class Calculate
{
    public function calculateEvenOdd($arrTextOne) {
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
        return ['even'=> $even, 'odd' => $odd];
    }

    public function calculateCountWordsAndVowel($arr) {
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

    public function calculateDate($val) {
        $interim = date("j-m-Y");
        $bDay = date_create($val);
        $today = date_create($interim);
        $diff = date_diff($bDay, $today);
        $array['interim'] = $interim;
        $array['diff'] = $diff;
        return $array;
    }
}