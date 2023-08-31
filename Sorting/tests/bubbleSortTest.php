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
}
?>