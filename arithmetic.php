<?php

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b . PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

add(4,5);


function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b . PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

subtract(456,567);


function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b . PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

multiply(45,2);


function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a / $b . PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

divide(56,3);


function modulus($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a % $b . PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

modulus(89,3);


//  function compare($a, $b) {
//      echo $a == $b ? 'TRUE' : 'FALSE';
//      echo PHP_EOL;
//  }
//  
//  compare(42,'42');
//  
//  
//  // compare 2 items
//  // $a is mixed
//  // $b is mixed
//  // $strict is boolean
//  function compare_2($a, $b, $strict = true) {	//$strict = true, sets true as the default for $strict
//      if ($strict === true) {
//      	echo $a === $b ? 'TRUE' : 'FALSE';
//      } else {
//      	echo $a == $b ? 'TRUE' : 'FALSE';
//      }
//      echo PHP_EOL;
//  }
//  
//  compare_2(42, '42', true);
//  
//  
//  function inspect($variable = null, $dump = true) {
//  	if ($dump === true) {
//  		var_dump($variable);
//  	} else {
//  		print_r($variable);
//  	}
//  }
//  
//  inspect(45,'45', false);
//  
//  
//  function adder($a, $b) {
//      if (is_numeric($a) && is_numeric($b)) {
//      	echo $a + $b;
//      } else {
//      	echo 'ERROR: both $a and $b should be numbers'
//      }
//      echo PHP_EOL;
//  }
//  
//  adder(4,5);


?>