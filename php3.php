<?php 

/* 1. Сделайте функцию, которая возвращает куб числа. Число передается 
параметром. */

function cub ($num) {

    return pow($num,3);
}

echo "Куб числа равен " . cub(3);

echo '<br />';


/* 2. Сделайте функцию, которая возвращает сумму двух чисел. Числа 
передаются параметрами функции. */

function sum ($a = 0, $b = 0) {

    return $a + $b;
}

echo 'Сумма двух чисел: ' . sum();

echo '<br />';


/* 3. Сделайте функцию, которая принимает параметром число от 1 до 7, а 
возвращает день недели на русском языке. */

function week($num) :string {

    $result = '';

    if ($num > 0 && $num < 8) {

        switch ($num) {
            case 1: 
                $result = 'Понедельник';
            break;
            case 2: 
                $result = 'Вторник';
            break;
            case 3: 
                $result = 'Среда';
            break;
            case 4: 
                $result = 'Четверг';
            break;
            case 5: 
                $result = 'Пятница';
            case 6: 
                $result = 'Суббота';
            break;
            case 7: 
                $result = 'Воскресенье';
            break;
        }
    } else return 'Введено неправильное число для дня недели';

    return $result;
}

echo week(0);

echo '<br />';


/* 4. Сделайте функцию, которая параметром принимает число и проверяет - 
отрицательное оно или нет. Если отрицательное - пусть функция вернет true, 
а если нет - false. */

function checkNumb($num) {

    $res = ($num > 0) ? false : true;  
    
    return $res;
}

echo var_dump(checkNumb(-9));

echo '<br />';


/* 5. Сделайте функцию getDigitsSum (digit - это цифра), которая параметром 
принимает целое число и возвращает сумму его цифр. */

function getDigitsSum ($digit) {

    if (is_numeric($digit)) {

        $digit = str_split($digit);

        $result = 0;
    
        for ($i = 0; $i < count($digit); $i++) {
    
            $result += $digit[$i];
        }
    } else return 'Введено не число';

    return $result;
}

echo getDigitsSum('555');

echo '<br />';


/* 6. Найдите все года от 1 до 2020, сумма цифр которых равна 13. Для этого 
используйте вспомогательную функцию getDigitsSum из предыдущей задачи. */

function year($arg1 = 1, $arg2 = 2020) {

    $res = 'Года: ';

    for ($i = $arg1; $i <= $arg2; $i++) {

        if (getDigitsSum ($i) == 13) {

            $res .= "$i, "; 
        }
    }   

    return substr_replace($res,".",-2);
}

echo year();

echo '<br />';


/* 7. Сделайте функцию isEven() (even - это четный), которая параметром 
принимает целое число и проверяет: четное оно или нет. Если четное - пусть 
функция возвращает true, если нечетное - false. */

function isEven($arg) {

    return ($arg % 2) ? false : true;
}

echo var_dump(isEven(8));

echo '<br />';


/* 8. Сделайте функцию, которая принимает строку на русском языке, а 
возвращает ее транслит.  */

function translit($str) {

    $tr = array(
        "А"=>"A","Б"=>"B","В"=>"V","Г"=>"G",
        "Д"=>"D","Е"=>"E","Ё"=>"E","Ж"=>"J","З"=>"Z","И"=>"I",
        "Й"=>"Y","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N",
        "О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T",
        "У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS","Ч"=>"CH",
        "Ш"=>"SH","Щ"=>"SCH","Ъ"=>"","Ы"=>"YI","Ь"=>"",
        "Э"=>"E","Ю"=>"YU","Я"=>"YA","а"=>"a","б"=>"b",
        "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ё"=>"e","ж"=>"j",
        "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
        "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
        "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
        "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
        "ы"=>"yi","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya"
    );

    return strtr($str, $tr);
}

echo translit('баобаб');

echo '<br />';


/* 9. Сделайте функцию, которая возвращает множественное или единственное 
число существительного. Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок. Функция
первым параметром принимает число, а следующие 3 параметра — форма 
для единственного числа, для чисел два, три, четыре и для чисел, больших 
четырех, например, func(3, 'яблоко', 'яблока', 'яблок'). */

function mnNumb ($ar, $ar1, $ar2, $ar3) {

    echo $ar . '<br/>';
    return "1 $ar1, 2 (3, 4) $ar2, 5 $ar3 ";
}

echo mnNumb( 8, 'вишня', 'вишни', 'вишен'); 

echo '<br />';


/* 10. Дан массив с числами. Выведите последовательно его элементы 
используя рекурсию и не используя цикл. */


$arrayNumb = [5, 7, 10, 55, 440];

function showNumb ($arg, $count = 0, $result = "") {

    if ($count >= count($arg)) return $result;

    $result .= $arg[$count] . '<br />';

    $count++;

    return showNumb($arg, $count, $result);
} 

echo showNumb($arrayNumb);

echo '<br />';


/* 11. Дано число. Сложите его цифры. Если сумма получилась более 9-ти, 
опять сложите его цифры. И так, пока сумма не станет однозначным числом 
(9 и менее). */

function numbSumm($a) {

    $a = getDigitsSum($a);
    if ($a <= 9) return $a;
    else return numbSumm ($a);  
}

echo numbSumm(555);

echo '<br />';


/* 12. Рассчитать скорость движения машины и выведите её в удобочитаемом 
виде. Осуществить возможность вывода в км/ч, м/c. Представить решение 
задачи с помощью одной функции. */

function speed($s, $t, $v = "км") {

    if ($v == 'метр') {

        return ceil(($s * 1000) / ($t * 60 * 60)) . " м/с";

    } else {

        return ceil(($s / $t)) . " км/ч";
    }   
}

echo speed(100, 1.5, 'метр');
echo '<br />';
echo speed(100, 1.5,);

echo '<br />';


/* 13. Даны 2 слова, определить можно ли из 1ого слова составить 2ое, при 
условии что каждую букву из строки 1 можно использовать только один раз. */


function str1($a, $b) {

    $a = str_split($a);

    $b = str_split($b);

    sort($b);
    sort($a);


    $dop = array_intersect($b, $a);
   // echo var_dump($dop);

    for ( $i = 0; $i < count($b); $i++ ){

        if ($b[$i] != $dop[$i]) {

            return 'элементы не равны'; 
        }
    } 

    return "можно сложить"; 
}

echo str1('fabaiaaaau2', 'aa22u');

echo '<br />';


// или при условии что оба слова равны 

function str($a, $b) {

    $a = str_split($a);

    sort($a);

    $b = str_split($b);

    sort($b);

    $a = implode('', $a);

    $b = join('', $b);

    if ($a == $b) return 'Можно составить одно слово из второго';
    else return "Нельзя ничего составить";
}

echo str('ара', 'аар');

echo '<br />';


/* 14. Палиндромом называют последовательность символов, которая читается 
как слева направо, так и справа налево. Напишите функцию по определению 
палиндрома по переданному параметру. */


function st($a) {

    $a = strtolower(translit($a));

    $rev = strtolower(translit($a));

    $rev = strrev($a);

    if ($a == $rev) return 'Полиндром';
    else return "Не полиндром";
}

echo st('Бааб');


/* 15. Создание функцию создания таблицы умножения в HTML-документе в 
виде таблицы с использованием соотв. тегов. */


function tab() {

    echo '<div style = "display: flex; flex-wrap: wrap;" >';  

    for ($i = 2; $i <= 9; $i++) {

        echo '<div style = "border: 2px solid #000; width: 100px; text-align: center; margin-right: 5px; margin-bottom:5px;" >';

        for ($j = 1; $j <= 10; $j++) {

            echo $i . ' * ' . $j . " = " . $i * $j;

            echo '<br />';
        }

        echo "</div>";
    }

    echo "</div>";
}

tab();


/* 16. Дана строка с текстом. Напишите функцию определения самого длинного
слова. */

function strLong($arg) {

    $s = explode(" ", $arg);
    
    $max = $s[0];
          
    for ($j = 1; $j < count($s); $j++) {
         
    if (strlen($max) > strlen($s[$j])) $max = $max;
    
    else $max = $s[$j]; 
        
    }
            
    return $max;     
}
      
echo strLong("11111 222 9999999999999");

echo '<br />';


/* 17. Напишите функцию определения суммарного количества единиц в числах
от 1 до 100. */

    
function su($n = 1, $n1 = 100) {

    $array = [];

    for ($i = $n; $i <= $n1; $i++) {
        
        array_push($array, $i);
    }

    $array = join ("", $array); 
      
    return substr_count($array, '1');    
}

echo su();


