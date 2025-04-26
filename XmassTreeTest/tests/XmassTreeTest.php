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

        $this->assertSame($expected_outcome, $this->tree->generateTree(12));
    }

    // Test for invalid input (height = 0)
    public function testZeroHeight()
    {
        $expected = "Invalid tree height.\n";
        $this->assertEquals($expected, $this->tree->generateTree(0));
    }

    // Test for invalid input (negative height)
    public function testNegativeHeight()
    {
        $expected = "Invalid tree height.\n";
        $this->assertEquals($expected, $this->tree->generateTree(0)); //0 is def. not positive
        $this->assertEquals($expected, $this->tree->generateTree(-5));
        $this->assertEquals($expected, $this->tree->generateTree(-3));
    }

    //testign all trees-> next line
    public function testAllTreesEndWithNewline()
    {
        $this->assertStringEndsWith("\n", $this->tree->generateTree(1));
        $this->assertStringEndsWith("\n", $this->tree->generateTree(3));
        $this->assertStringEndsWith("\n", $this->tree->generateTree(7));
        $this->assertStringEndsWith("\n", $this->tree->generateTree(12));
    }

    //tree trunk tests
    public function test_trunk_does_appears_at_the_bottom()
    {
        $result = $this->tree->generateTree(3);
        $lines = explode("\n", trim($result));
        $this->assertEquals(' |||', end($lines));
    }

    public function test_tree_trunk_only_appears_once_in_the_xtree()
    {
        $result = $this->tree->generateTree(8);
        $firstPosition = strpos($result, '|||');
        $lastPosition = strrpos($result, '|||');
        $this->assertEquals($firstPosition, $lastPosition);
    }


}
