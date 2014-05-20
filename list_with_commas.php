<?php

// Converts array into list n1, n2, ..., and n3
function humanized_list($physicists_array) {
	implode("/n", $physicists_array);
	return;
}

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

//convereted string to array
$physicists_array = explode(', ', $physicists_string);

//removed last index and stored it in variable
$last = array_pop($physicists_array);


// Humanize that list
// converted array back to a string and created human friendly string
$famous_fake_physicists = implode(', ', $physicists_array) . " and " . $last ;

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.\n";

?>