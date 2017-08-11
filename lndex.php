<?php
    $name = "yura";
    echo  $name. '<br>';
    $age =  "30";
    echo $age. '<br>';
    echo "'Меня зовут $name. '<br>'";
    echo "'Мне $age. лет '<br>'";// Задание 1

    $risunki = "80";
    $flomaster = "26";
    $karandasi = "40";
    echo $kraski = $risunki - ($flomaster + $karandasi);//Задание 2

    define('const', '30', true);
    echo 'const'.'<br>';

    $age = 25;
    if ($age >18-35) {
        echo 'Вам еще работать и работать'. '<br>';
    }
    elseif ($age > 65) {
        echo 'Вам пора на пенсию'. '<br>';
    }

   // define (value ("pi") == 5);
    //if (defined ("pi")
        //echo "pi";//

    $day = 1;//Задание 5
    switch ($day) {
    case 1:
        echo "Это рабочий день". '<br>'; break;

}

    $day = 6;
    $day = 7;
        switch ($day) {
        case 6:
        case 7;
        echo "Это выходной день"; break;

}
    $day = 10;
    switch ($day) {
        case 6:
        case 7;
        echo "Это неизвестный день".'<br>'; break;//Задание 5

}


    $bmw = ['model', 'speed', 'doors', 'year'];//хадание 6


    echo '<pre>';
    print_r($bmw) .'<br>';


    $a = 1;
    $b = 2;
    $c = 3;
    $d = 4;
    $e = 5;
    $g = 6;
    $i = 7;
    $f = 8;
    $k = 9;
    $l = 10;
    $r = $a * $b;
    $r1 = $a * $c;
    $r2 = $a * $d;
    $r3 = $a * $e;
    $r4 = $a * $i;
    $r5 = $a * $f;
    $r6 = $a * $k;
    $r7 = $a * $l;
    echo "$r<br> $r1<br> $r2<br> $r3<br> $r4<br> $r5<br> $r6<br> $r7<br>";





?>