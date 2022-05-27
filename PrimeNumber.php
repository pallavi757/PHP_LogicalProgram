<?php
class PrimeNum{
    function primeNumber(){
        $MyNum = readline("Enter the number: ");
    //     if(is_numeric($MyNum))
    // echo true;
    // else
    //  echo false;


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
    }
    
}
$objprime = new PrimeNum();
$objprime->primeNumber();

?>