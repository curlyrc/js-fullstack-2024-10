<?php
//for ($i=0;$i<3;$i++) echo 'Hello ';
//echo 'Сумма четных чисел';
//$sum=null;
//
//for ($i=20; $i>=0; $i--) {
//    if($i%2 != 0) continue;
//    else $sum += $i ;
//};
//echo '$sum= '. $sum;
//echo '<br>';
//echo 'Посчитать факториал <br>';
//for($i=0; $i<=10; $i++){
//    if($i == 0) {
//        $i = 1;
//        $f = 1;
//    }
//    $f *= $i;
//    echo "$f, <br>";
//}
//$i--;
//echo "Факториал $i! равен $f. <br>";

//Уровень 1.1 задачка№1
$int = -1;
if ($int > 0) {
    echo "Число $int- положительное.<br>";
}
//elseif ($int == 0) {
//    'Число $int равно 0';
//}
else echo 'Число $int отрицательное.<br>';

//Уровень 1.1 задачка№2
$str= 'jshgrh';
echo 'Длина строки равна ' , strlen($str) , '<br>';

//Уровень 1.1 задачка№3
//Вывод последний символ строки.
$last= strlen($str)-1;
echo "Последний символ строки '$str[$last]' <br>";
//короткая запись
//$str = 'abcde';
//echo $str[strlen($str) - 1];