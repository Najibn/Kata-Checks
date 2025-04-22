<?php 

$trunk = "|||";
$space = " ";
$star = "*";
//$k = ($height_tree - $i);

$height_tree = (int) readline("input the number of rows!: ");

for ($i = 1; $i <= $height_tree; $i++) {
    $num_stars = ($i * 2) - 1;
    $num_spaces = $height_tree - $i;

    //  spaces between 
    for ($j = 0; $j < $num_spaces; $j++) {

        echo $space;
    }

    // the stars 
    for ($j = 0; $j < $num_stars; $j++) {
        echo $star;
    }

    echo "\n";
}

// Trunk center balance also -> $height_tree * 2 - 1 - strlen($trunk)) / 2;
$trunk_spaces = $height_tree - 2;

for ($j = 0; $j < $trunk_spaces; $j++) {
    echo $space;
}
echo $trunk . PHP_EOL;


?>