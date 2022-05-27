<?php

// Use microtime() function to measure
// starting time
$time_start = microtime(true);

// Code of program
$num = 0;

for( $i = 0; $i < 100000000; $i += 1 ) {
	$num += 5;
}

// Use microtime() function to measure
// ending time
$time_end = microtime(true);

// Time difference
$time = $time_end - $time_start;

echo "The speed of code = ".$time;

?>
