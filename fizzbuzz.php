<?php 

/*
Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz”
 instead of the number and for the multiples of five print “Buzz”. For numbers which are 
 multiples of both three and five print “FizzBuzz”.
*/

for ($i = 1; $i <= 100; $i++){
	
	$divBy3 = ($i % 3 == 0);
	$divBy5 = ($i % 5 == 0);

	if($divBy3 && $divBy5) {
    	echo "FizzBuzz\n";
    } elseif ($divBy3) {
    	echo "Fizz\n";
    } elseif ($divBy5) {
    	echo "Buzz\n";
    } else {
    	echo "$i\n";
    }
}

 ?>