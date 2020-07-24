<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    echo 'TASK 1 <br />';
    function kyb($a) {
        return $a ** 3;
    }
    echo kyb(3);
    echo '<hr />';

    echo 'TASK 2 <br />';
    function summ($a, $b) {
        return $a + $b;
    }
    echo summ(3 , 4);
    echo '<hr />';

    echo 'TASK 3 <br />';
    function week($a) {
        if ($a >= 1 && $a <= 7) {
        switch ($a) {
            case 1:
                return 'Понедельник';
            break;
            case 2:
                return 'Вторник';
            break;
            case 3: 
                return 'Среда';
            break;
            case 4:
                return 'Четверг';
            break;
            case 5:
                return 'Пятница';
            break;
            case 6:
                return 'Суббота';
            break;
            case 7:
                return 'Воскресенье';
            break;
        }
        } else return 'Укажите параметром число от 1 до 7!';
            
    }
    echo week(6);
    echo '<hr />';

    echo 'TASK 4 <br />';
    function proverka($a) {
        return is_int($a) && $a > 0 ? 'TRUE' : 'FALSE';
    }
    echo proverka(5);
    echo '<hr />';

    echo 'TASK 5 <br />';
    function getDigitsSum($a) {
        $b = (string) $a;
        $c = 0;
        for ($i = 0;$i < strlen($b);$i++) {
            // if ($b[$i] == '') break;
            $c += $b[$i];
        }
        return $c;
    }
    echo getDigitsSum(12345678);
    echo '<hr />';

    echo 'TASK 6 <br />';
    function yearSumm() {
        $b = 0;
        for ($i = 0; $i <= 2020; $i++) {
            if (getDigitsSum($i) == 13) $b++;
        }
        return $b;
    }
    echo yearSumm();
    echo '<hr />';

    echo 'TASK 7 <br />';
    function isEven($a) {
        return is_int($a) && fmod($a, 2) == 0 && $a > 0 ? 'TRUE' : 'FALSE';
    }
    echo isEven(10);
    echo '<hr />';

    echo 'TASK 8 <br />';
    function translit($a) {
        $arrRus = ['а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ь','ы','ъ','э','ю','я',' ', '!'];
        $arrEng = ['a','b','v','g','d','e','jo','zh','z','i','j','k','l','m','n','o','p','r','s','t','u','f','h','cz','ch','sh','sh','`','y','``','e`','yu','ya',' ', '!'];
        
        if (!is_string($a)) return 'Введите строку в качестве параметра функции!';

        for ($i = 0; $i < strlen($a); $i++) {
            $string = mb_substr($a, $i, 1);
            for ($j = 0; $j < count($arrRus); $j++) {
                if ($string == $arrRus[$j]) echo $arrEng[$j];
            }
        }
    }
    translit('привет мир!');
    echo '<hr />';

    echo 'TASK 9 <br />';
    function apple($a = 0, $b ,$c, $d) {
        $str = (string)$a;
        $strLength = strlen($str)-1;
        if ($a <= 20) {
            if ($a == 0) return $a . ' ' . $d;
            if ($a == 1) return $a . ' ' . $b;
            if ($a >= 2 && $a <= 4) return $a . ' ' . $c;
            if ($a >= 5 && $a <= 20) return $a . ' ' . $d;
        } else {
            if ($str[$strLength] == 1) return $a . ' ' . $b;
            if ($str[$strLength] >= 2 && $str[$strLength] <= 4) return $a . ' ' . $c;
            if ($str[$strLength] >= 5 && $str[$strLength] <= 20) return $a . ' ' . $d;
        }
    }
    echo apple(143, 'яблоко', 'яблока', 'яблок');
    echo '<hr />';

    echo 'TASK 10 <br />';
    function arr($i) {
        $arr = [1,2,3,4,5,6,7,8,9,10];
        if (!empty($arr[$i])) {
            echo $arr[$i] . ' ';
            $i += 1;
            arr($i);
        }
    }
    arr(0);
    echo '<hr />';

    echo 'TASK 11 <br />';
    function summa9($a) {
        if (getDigitsSum($a) > 9) {
            $a = getDigitsSum($a); 
            summa9($a); // почему не работает рекурсия?
        } // else return getDigitsSum($a);
        return getDigitsSum($a);
    }
    echo summa9(66666666669);
    echo '<hr />';

    echo 'TASK 12 <br />';
    function speed($s, $t) {
        return 'Скорость автомобиля равна: ' . ($s / $t) . 'км/ч. Или ' . round(($s / $t / 3.6), 1) . 'м/с.';
    }
    echo speed(190, 2.5);
    echo '<hr />';

    // echo 'TASK 13 <br />';
    // function words($a, $b) {
    //     for ($i = 0; $i < strlen($b); $i++) {
    //         if (stristr($a, $b[$i])) echo 'A ';
    //     }
    // }
    // words('строительство', 'ель');
    // echo '<hr />';

    // Остальное не успел доделать
    
?>
</body>
</html>