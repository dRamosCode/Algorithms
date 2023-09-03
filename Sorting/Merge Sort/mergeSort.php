<?php

    function mergeSort(&$array,$leftIndex=null,$rightIndex=null){
        
        // Initialize right index if null
        if(isset($leftIndex)==false){
            $leftIndex = 0;
            $rightIndex = sizeof($array)-1;
        }

        // Keep on splitting until it can't be split more
        if ($leftIndex<$rightIndex){
            
            // Calculate split index
            $middleIndex = floor(($rightIndex-$leftIndex)/2)+$leftIndex;

            // Recursion - sort left and right halves
            mergeSort($array,$leftIndex,$middleIndex);
            mergeSort($array,$middleIndex+1,$rightIndex);

            // When it can't be split more merge sort together
            merge($array,$leftIndex,$middleIndex,$rightIndex);
        }
    }

    // Function to merge sort together an array
    function merge(&$array,$leftIndex,$middleIndex,$rightIndex){

        // Get split sizes
        $leftLength = $middleIndex - $leftIndex + 1;
        $rightLength = $rightIndex - $middleIndex;

        // Split left array
        for ($i=0; $i < $leftLength; $i++) { 
            $leftArray[$i] = $array[$leftIndex+$i];
        }
        // Split right array
        for ($i=0; $i < $rightLength; $i++) { 
            $rightArray[$i] = $array[$middleIndex+1+$i];
        }

        // Sort while merging
        $leftArrayIndex = 0;
        $rightArrayIndex = 0;
        $mergedArrayIndex = $leftIndex;

        while($leftArrayIndex<$leftLength && $rightArrayIndex<$rightLength){
            // Left is bigger
            if($leftArray[$leftArrayIndex]<=$rightArray[$rightArrayIndex]){
                $array[$mergedArrayIndex]=$leftArray[$leftArrayIndex];
                $leftArrayIndex++;
                $mergedArrayIndex++;
            }
            // Right is bigger
            else{
                $array[$mergedArrayIndex]=$rightArray[$rightArrayIndex];
                $rightArrayIndex++;
                $mergedArrayIndex++;
            }
        }

        // Copy the rest of the elements to result array
        while ($leftArrayIndex < $leftLength) {
            $array[$mergedArrayIndex] = $leftArray[$leftArrayIndex];
            $leftArrayIndex++;
            $mergedArrayIndex++;
        }
        while ($rightArrayIndex < $rightLength) {
            $array[$mergedArrayIndex] = $rightArray[$rightArrayIndex];
            $rightArrayIndex++;
            $mergedArrayIndex++;
        }
    }

?>