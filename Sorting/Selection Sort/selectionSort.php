<?php

function selectionSort(&$array){
    // Get array length
    $length = sizeof($array);

    for ($i=0; $i < $length; $i++) { 
        // Find minimum value from starting index
        $indexMin = $i;
        for ($j=$i; $j < $length; $j++) { 
            if ($array[$j]<$array[$indexMin]) {
                $indexMin = $j;
            }
        }
        // Swap the minimum value to index position
        $temp = $array[$i];
        $array[$i] = $array[$indexMin];
        $array[$indexMin] = $temp;
    }
}

?>