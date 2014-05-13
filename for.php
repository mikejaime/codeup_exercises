<?php 

//prompt user to input starting number
fwrite(STDOUT, "Please input a starting number:\n");
$startnum = trim(fgets(STDIN));

//verifies user input is an integer
if (!is_numeric($startnum)) {
	echo "You must input a starting integer/number:\n";
	exit(1);
}

//prompt user to input ending number
fwrite(STDOUT, "Please input an ending number:\n");
$endnum = trim(fgets(STDIN));

//verifies user input is an integer
if (!is_numeric($endnum)) {
	echo "You must input an ending integer/number:\n";
	exit(1);
}

//prompt user to input increment value
fwrite(STDOUT, "Please input an increment amount:\n");
$increment = trim(fgets(STDIN));

//if user does not input an increment, auto set to 1
if ($increment == "") {
	$increment  = 1;
}

//verifies user input is an integer
if (!is_numeric($increment)) {
	echo "You must input an integer/number for your increment:\n";
	exit(1);
}

for ($number = $startnum; $number <= $endnum; $number += $increment) {
    echo "$number\n";
}

 ?>