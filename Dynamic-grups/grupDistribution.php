<?php

function DynamicGrup($names, $numGrups)
{
    $groups = [];
    $i=0;
    while ($i < $numGrups) {
        $groups[$i] = [];
        $i++;
    }

    foreach ($names as $index => $name) {
        $groupIndex = $index % $numGrups;
        $groups[$groupIndex][] = $name;
    }

    foreach ($groups as $index => $group) {
        echo "Group " . ($index + 1) . " => " . implode(" ", $group) .PHP_EOL;
    }
    
}

$list = ["Pere", "Joan", "tito", "Mayte", "Julia", "alisa"];
$numGroups = 6;
DynamicGrup($list, $numGroups);