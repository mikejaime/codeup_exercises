<?php

$a = 34;
$b = 56;
$c = '56';

// Add an else clause to the net 2 statements
if ($a < $b){
    // output the appropriate result
    echo "$a is less than $b\n";
}   else {
    echo "$a is not less than $b\n";
}

if ($b > $a){
    // output the appropriate result
    echo "$b is greater than $a\n";
}   else {
    echo "$b is not greater than $a\n";
}

// Shorten the next 2 statements into an if/else
if ($b >= $c){
    // output the appropriate result
    echo "$b is greater or equal to $c\n";
}   else {
    // output the appropriate result
    echo "$b is is not greater or equal to $c\n";
}

// combine the next 4 conditionals into 
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal
if ($b == $c) {
    // output the appropriate result
    echo "$b is equal to $c\n";
} elseif ($b === $c) {
    // output the appropriate result
    echo "$b is identical to $c\n";
} elseif ($b != $c) {
    // output the appropriate result
    echo "$b is not equal to $c\n";
} elseif ($b !== $c) {
    // output the appropriate result
    echo "$b is not identical to $c\n";
}

?>