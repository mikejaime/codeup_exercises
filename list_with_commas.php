<?php

// Converts array into list n1, n2, ..., and n3
function humanized_list($array) {
  // Your solution goes here!
}

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode(', ', $physicists_string);

$last = array_pop($physicists_array);

//  echo implode(', ', $physicist_array) . " and " . $last ;


// Humanize that list
$famous_fake_physicists = implode(', ', $physicists_array) . " and " . $last ;

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.\n";

?>