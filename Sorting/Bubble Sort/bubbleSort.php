<?php

function bubbleSort(&$array){
    // Get length of array
    $length = sizeof($array);

    // Bubble Sort
    for($i=0; $i<$length; $i++){

        // Loop through all non sorted elements
        for($j=0; $j<$length-$i-1; $j++){
            // Sort biggest element to bottom of array
            if ($array[$j]>$array[$j+1]){
                // Swap elements
                $temp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temp;
            }
        }
    }
}

?>