<?php
// the add, subtract, multiply, divide & modulus fuc=nctions
// are native to php and are implemented here

// error 'check' function - validates values passed are numbers
function check($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return TRUE;
    } else {
        echo "ERROR: Both arguments must be numbers. Variables Entered: $a & $b" . PHP_EOL;
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

// passed 'the' to test check function
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

?>