<?php

$trunk = "|||";
$space = " ";
$star = "*";
$baloon = "0";

$height_tree = (int) readline("Input the number of rows!: ");

for ($i = 1; $i <= $height_tree; $i++) {
    
    $num_stars = ($i * 2) - 1;
    $num_spaces = $height_tree - $i;
    $middle_index = floor($num_stars / 2);

    // Print spaces
    for ($j = 0; $j < $num_spaces; $j++) {
        echo $space;
    }

    // Print stars with an '0' in the middle instead of *
    for ($j = 0; $j < $num_stars; $j++) {
        if ($j == $middle_index) {
            echo $baloon;
        } else {
            echo $star;
        }
    }

    echo "\n";
}

// Trunk center balance
$trunk_spaces = $height_tree - 2;

for ($j = 0; $j < $trunk_spaces; $j++) {
    echo $space;
}
echo $trunk . PHP_EOL;


?>