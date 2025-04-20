<?php 

//more security for invalid Inputs
//and other alphabeths ñ etc
//ASCII

$alphabeth = [
    'A' => 1, 'B' => 2, 'C' => 3, 'D' => 4, 'E' => 5, 'F' => 6, 'G' => 7, 
    'H' => 8, 'I' => 9, 'J' => 10, 'K' => 11, 'L' => 12, 'M' => 13, 
    'N' => 14, 'O' => 15, 'P' => 16, 'Q' => 17, 'R' => 18, 'S' => 19, 
    'T' => 20, 'U' => 21, 'V' => 22, 'W' => 23, 'X' => 24, 'Y' => 25, 'Z' => 26
];

function calc_letter_points($word) {
    global $alphabeth;
    $word = strtoupper($word); 
    $total_points = 0;

    for ($i = 0; $i < strlen($word); $i++) {

        $letter = $word[$i];

        if (array_key_exists($letter, $alphabeth)) {

            $total_points = $total_points + $alphabeth[$letter];

        }

    }

    return $total_points;

}

do {
    $word = readline("Enter a word/phrase: ") . PHP_EOL;

    $points = calc_letter_points($word);
    
    echo "The word: {$word} is worth {$points} points." ;
    
    if ($points == 100) {
        echo "Congratulations!!! You've entered a word worth exactly 100 points!" . PHP_EOL;
        break;
    } elseif ($points < 100) {
        $remaining = 100 - $points;
        echo "You need {$remaining} more point to hit 100!" . PHP_EOL;
    } else {
        $over = $points - 100;
        echo "You went {$over} points 100" . PHP_EOL;
    }
    
} while (true);

?>
