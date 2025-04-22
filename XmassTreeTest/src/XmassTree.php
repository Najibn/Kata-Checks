<?php

namespace App;

class XmassTree
{
    private string $star = "*";
    private string $space = " ";
    private string $trunk = "|||";


    // Generates the tree based on the height provided.
    public function generateTree(int $height): string
    {
        if ($height < 1) {
            return "Invalid tree height.\n";
        }

        $output = '';

        // Generate the leaves (the triangle part)
        for ($i = 1; $i <= $height; $i++) {
            $output .= $this->generateLeafRow($i, $height);
        }

        // Generate the trunk part 
        $output = $output . $this->generateTrunk($height);

        return $output;
    }

    //helper functions 
    //Generates a single row of leaves for the tree.
    private function generateLeafRow(int $row, int $height): string
    {
        $numStars = ($row * 2) - 1;
        $numSpaces = $height - $row;
        $rowString = str_repeat($this->space, $numSpaces) . str_repeat($this->star, $numStars) . "\n";
        return $rowString;
    }

 
     //Generates the trunk of the tree.
    private function generateTrunk(int $height): string
    {
        $numSpaces = max($height - 2, 0);
        return str_repeat($this->space, $numSpaces) . $this->trunk . "\n";
    }

}
