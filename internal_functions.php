<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function setcheck($var) {			//$var could be named anything but acts as a place holder within the function
    if (isset($var) && (!empty($var))) {
        echo "\$variable is SET\n";
    } elseif (empty($var)) {
    	echo "\$variable is EMPTY\n";
    }
}

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'
unset($nothing);
setcheck($nothing);
setcheck($something);
setcheck($array);

// Serialize the array $array, and output the results
$serial = serialize($array);
echo $serial;

// Unserialize the array $array, and output the results
$clone = unserialize($serial);
print_r($clone);