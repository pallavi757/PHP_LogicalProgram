<?php
$MyNum = readline("Enter the number: ");
$n = 0;

for ($i = 1; $i <= $MyNum; $i++) {
    if ($MyNum % $i == 0) {
        $n++;   
    }
}
if ($n == 2) {
    echo $MyNum . " is a prime number.";
} else {
    echo $MyNum . " is not a prime number.";
}
