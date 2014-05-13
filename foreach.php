<?php 

//Construct a loop that iterates through each value and outputs its
//type as either integer, float, boolean, array, null, or string

$things = ['Sgt. Pepper', "11", null, [1,2,3], 3.14, "12 + 7", false, (string) 11];

foreach ($things as $dataType) {
    if (is_integer($dataType)) {
        echo "{$dataType} is an integer\n";
    } elseif (is_float($dataType)) {
        echo "{$dataType} is a float\n";
    } elseif (is_bool($dataType)) {
        echo "{$dataType} is a boolean\n";
    } elseif (is_array($dataType)) {
        echo "{$dataType} is an array\n";
    } elseif (is_null($dataType)) {
        echo "{$dataType} is null\n";
    } else {
        echo "{$dataType} is a string\n";
    }
} 

 ?>