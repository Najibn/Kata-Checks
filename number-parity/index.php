<?php

$number = 7;  

if ($number % 2 == 0) {

   echo "the number $number is even ......" . PHP_EOL;

   $i = $number;

    while ($i >= 0) {

        echo "$i" . PHP_EOL;

        $i = $i - 2;

    }

}else {

    echo "The number $number is odd ......"  . PHP_EOL;

    $i = $number;

    while ($i >= 1) {

        echo "$i" . PHP_EOL;

        $i = $i - 2;

    }

}


/*
range() function
foreach loop.
*/
?>