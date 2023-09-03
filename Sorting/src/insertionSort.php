<?php

function insertionSort(&$array){
    // Get array length
    $length = sizeof($array);

    // Loop through array starting at second position
    for ($i=1;$i<$length;$i++){
        $key = $array[$i];
        $j = $i - 1;
        
        // Swap bigger keys backwards until correct position is found
        while ($j>=0 && $array[$j]>$key){
            $array[$j+1]=$array[$j];
            $j--;
        }
        $array[$j+1]=$key;
    }
}

?>