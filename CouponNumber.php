<?php
$coupanLimit = readline("Enter the number :- ");
$array = array();
$counter = 0;
$duplicateValueInArray = 0;
while($counter != $coupanLimit){
    $randomNumber = rand(0,50);
    foreach($array as $value){
        if($randomNumber == $value){
            $duplicateValueInArray++;            //checking for duplicate value
        }
    }
}
    if($duplicateValueInArray == 0){
        $array[$counter] = $randomNumber;
        $counter++;
    }     
    $duplicateValueInArray = 0;   
                        

var_dump($array);
?>