<?php

include __DIR__ . "/../src/bubbleSort.php";

class BubbleSortTest extends PHPUnit\Framework\TestCase {
    public function test_it_orders_an_array_of_integers()
    {
        $testArray = [65,14,49,33,81,17,13,36,83,64];
        $expectedOutput = [13,14,17,33,36,49,64,65,81,83];

        bubbleSort($testArray);
        $this->assertEquals($testArray, $expectedOutput);
    }
    public function test_it_orders_negative_values()
    {
        $testArray = [-65,14,49,33,81,-17,13,-36,-83,64];
        $expectedOutput = [-83,-65,-36,-17,13,14,33,49,64,81];

        bubbleSort($testArray);
        $this->assertEquals($testArray, $expectedOutput);
    }
    public function test_it_orders_float_values()
    {
        $testArray = [96.43,74.18,71.71,54.85,53.36,41.94,24.67,38.45,1.32,20.76];
        $expectedOutput = [1.32, 20.76, 24.67, 38.45, 41.94, 53.36, 54.85, 71.71, 74.18, 96.43];

        bubbleSort($testArray);
        $this->assertEquals($testArray, $expectedOutput);
    }
    public function test_it_orders_a_mixture_of_numbers()
    {
        $testArray = [96.43,-74.18,71,54.85,53,41.9,-24.67,38,-1.32,-20];
        $expectedOutput = [-74.18, -24.67, -20, -1.32, 38, 41.9, 53, 54.85, 71, 96.43];

        bubbleSort($testArray);
        $this->assertEquals($testArray, $expectedOutput);
    }
    public function test_it_orders_numbers_in_string_format()
    {
        $testArray = ["96.43",-74.18,71,54.85,"53",41.9,"-24.67",38,-1.32,-20];
        $expectedOutput = [-74.18, -24.67, -20, "-1.32", 38, 41.9, 53, 54.85, 71, 96.43];

        bubbleSort($testArray);
        $this->assertEquals($testArray, $expectedOutput);
    }
}
?>