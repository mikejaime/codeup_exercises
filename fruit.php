<?php 

// fruit.php
// create an array of fruits.
// while a loop that prints the fruits.
// for / foreach
// 
// 
// 
// modify the fruit array so that you have: fruit name => color
// print out using a foreach loop:
// ie:   Apples are Red

$fruits = ['apple', 'orange', 'pineapple', 'kiwi', 'strawberry'];

foreach ($fruits as $fruit => $value) {
	echo $value . PHP_EOL;
}

?>