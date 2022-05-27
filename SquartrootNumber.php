<?php

 class SqrtNewtonMethod {
    static function sqrt() {
       
        $c=readline("Enter nonnegative number:");
        if(is_numeric($c)){
         $epsilon = 1e-15;    // relative error tolerance
         $t = $c;              // estimate of the square root of c

        // repeatedly apply Newton update step until desired precision is achieved
        while (abs($t - $c/$t) > $epsilon*$t) {
            $t = ($c/$t + $t) / 2;
        }
    }else{
        echo"enter valid number";
    }
        // print out the estimate of the square root of c
        echo $c;
    }
}
SqrtNewtonMethod::sqrt();
?>