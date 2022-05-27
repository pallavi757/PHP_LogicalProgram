<?php
class PerfectNumber
{
    static function toFind()
    {
        $n = readline("Enter the number:");
        if (is_numeric($n)&&$n>0) {
            $sum = 0;
            echo "The positive divisor are:";
            for ($i = 1; $i < $n; $i++) {
                if ($n % $i == 0) {
                    $sum = $sum + $i;
                    echo " " . $i;
                }
            }
            echo "\n";
            echo "The sum of the divisor is:" . $sum;
            echo "\n";
            if ($sum == $n) {
                echo "The given number is perfect";
            } else {
                echo "The given number is not perfect";
            }
        } else {
            echo "Enter valid number";
        }
    }
}
PerfectNumber::toFind();

//$perfect=new PerfectNumber();
//$perfect->toFind();
?>
