<?php
$prev = 0;
$next = 1;
$sum = 0;
$number = readline("Enter the number of element:");
echo "Fibonacci series is like: ";  
echo "\n";  
echo $prev .' '. $next;
for ($i = 2; $i < $number; ++$i) {
    $sum = $prev + $next;
    echo' '.$sum;
    $prev = $next;
    $next = $sum;
}
?>
