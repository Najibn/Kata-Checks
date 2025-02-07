<?php
// array_chunk()
// array_rand() and shuffle

function DynamicGrup($names)
{
    $numGrups = readline("input number of groups. (dont exceed the number of names.): ");

    $groups = [];
    $i=0;
    while ($i < $numGrups && (!$numGrups > count($names))) {
        $groups[$i] = [];
        $i++;
    }

    foreach ($names as $index => $name) {
        $groupIndex = $index % $numGrups;
        if ($groupIndex < 0 || $groupIndex >= $numGrups) {
           // throw new Exception("Invalid group number calculated");
        }
        $groups[$groupIndex][] = $name;
    }
    
    foreach ($groups as $index => $group) {
        echo "Group " . ($index + 1) . " => " . implode(" ,", $group) .PHP_EOL;
    }
    
}

$list = ["Pere", "Joan", "tito", "Mayte", "Julia", "alisa"];
DynamicGrup($list);