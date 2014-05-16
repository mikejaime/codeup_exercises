<?php

function check($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return TRUE;
    } else {
        echo "ERROR: Both arguments must be numbers. Variables Entered: $a & $b";
        return FALSE;
    }
}


function add($a, $b) {
    if (check($a, $b)) {
        return $a + $b;
    } else {
        return FALSE;
    }
}

add(the,5);


function subtract($a, $b) {
    if (check($a, $b)) {
        return $a - $b;
    } else {
        return FALSE;
    }
}

subtract(456,567);


function multiply($a, $b) {
    if (check($a, $b)) {
        return $a * $b;
    } else {
        return FALSE;
    }
}

multiply(45,The);


function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	if($b == 0) {
    		echo 'ERROR: You can not divide by 0, please input a different number';
            return FALSE;
    	} elseif(check($a, $b)){
    		return $a / $b;
    	}
    } 
}

divide(56,The);


function modulus($a, $b) {
    if (check($a, $b)) {
        return $a % $b;
    } else {
        return FALSE;
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