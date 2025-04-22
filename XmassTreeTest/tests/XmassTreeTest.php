<?php

use PHPUnit\Framework\TestCase;
use App\XmassTree;

class XmassTreeTest extends TestCase
{
    private XmassTree $tree;

    // Set up the tree object before each test
    protected function setUp(): void
    {
        $this->tree = new XmassTree();
    }


    // Test for tree height = 1 (smallest tree)
    public function testLowestTreeHeight(){

        $expected = "*\n|||\n";;

        $this->assertEquals($expected, $this->tree->generateTree(1));
    }

    // Test for normal input (tree height = 3)
    public function testNormalTreeHeight3()
    {
        $expected = "  *\n ***\n*****\n |||\n";
        $this->assertEquals($expected, $this->tree->generateTree(3));
    }


    // Test for medium tree height = 7 (middle based tree)
    public function testMediumTreeHeight7()
    {
        $expected = "      *\n     ***\n    *****\n   *******\n  *********\n ***********\n*************\n     |||\n";
        $this->assertEquals($expected, $this->tree->generateTree(7));

    }


    // Test for a large tree height number = 12 (highest tree)
    public function testHighTreeHeight12(){

        $expected_outcome = "           *\n          ***\n         *****\n        *******\n       *********\n      ***********\n     *************\n    ***************\n   *****************\n  *******************\n *********************\n***********************\n          |||\n";

        $this->assertEquals($expected_outcome, $this->tree->generateTree(12));
    }

}
