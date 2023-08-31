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
}



// Generate test array
/*
for ($i=0;$i<10000;$i++){
    $testArray[$i]=random_int(0,10000);
}

// Test the algorithm
$executionStart = microtime(true);
memory_reset_peak_usage();
bubbleSort($testArray);     
$memoryUsage = memory_get_peak_usage()/1024/1024;    
$executionTime = microtime(true) - $executionStart;

// Show results
for ($i=0;$i<sizeof($testArray);$i++){
    echo "$testArray[$i] ";
}
echo "\n\nExecution time: ",$executionTime," seconds";
echo "\nMemory usage: ",$memoryUsage," Megabytes";*/

?>