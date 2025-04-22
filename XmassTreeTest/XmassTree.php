<?php

define("LEAF","*");
define("BLANK_LEAF"," ");
define("TRUNK","|||");
define("TRUNK_LENGTH",3);

$treeHeight = intval(readline("enter a number of rows: "));
printTree($treeHeight);

function printTree(int $treeHeight): void {
    $treeLength = $treeHeight*2-1;
    $rowLength = 1;
    for($i = 0; $i < $treeHeight; ++$i) { 
        printLeafsRow($rowLength,$treeLength);
        $rowLength += 2;
    }
    printTrunk($treeLength);
}

function printTrunk(int $treeLength): void {
    if($treeLength == 1) echo TRUNK;
    else {
        $padding = intdiv($treeLength-TRUNK_LENGTH,2);
        echo str_repeat(BLANK_LEAF,$padding);
        echo TRUNK;
    }
    echo PHP_EOL;
}

function printLeafsRow(int $rowLength, int $treeLength): void {
    if($treeLength == 1) echo BLANK_LEAF.LEAF.BLANK_LEAF;   
    else  {
        $padding = intdiv(($treeLength-$rowLength),2);
        if($padding > 0) echo str_repeat(BLANK_LEAF,$padding);
        echo str_repeat(LEAF,$rowLength);
    }
    echo PHP_EOL;
}

?>