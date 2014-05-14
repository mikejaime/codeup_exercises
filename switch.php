<?php

// Create a new file named switch.php in your exercises directory with the following code:

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');

// switch($day_of_week) {
//     case 1:
//         // Output Monday
//     	echo "Monday" . PHP_EOL;
//     	break;
//     case 2:
//     	echo "Tuesday" . PHP_EOL;
//     	break;
//     case 3:
//     	echo "Wednesday" . PHP_EOL;
//     	break;
//     case 4:
//     	echo "Thursday" . PHP_EOL;
//     	break;
//     case 5:
//     	echo "Friday" . PHP_EOL;
//     	break;
//     case 6:
//     	echo "Saturday" . PHP_EOL;
//     	break;
//     case 7:
//     	echo "Sunday" . PHP_EOL;
//     	break;
// }


// Test and verify the results before proceeding by creating 
// a matching if block. The output should be identical.

if($day_of_week == 1) {
    echo "Monday" . PHP_EOL;
    } elseif($day_of_week == 2) {
    	echo "Tuesday" . PHP_EOL;
    } elseif($day_of_week == 3) {
    	echo "Wednesday" . PHP_EOL;
    } elseif($day_of_week == 4) {
    	echo "Thursday" . PHP_EOL;
    } elseif($day_of_week == 5) {
    	echo "Friday" . PHP_EOL;
    } elseif($day_of_week == 6) {
    	echo "Saturday" . PHP_EOL;
    } elseif($day_of_week == 7) {
    	echo "Sunday" . PHP_EOL;
    }