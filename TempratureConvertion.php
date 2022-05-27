<?php
/* PHP Program to Enter the Temperature in Celsius and Convert it into Fahrenheit and ViseVersa*/
Class Conversion{
    static function tempConversion(){
        $c =readline("Enter temprature in celsius:"); // value of the celsius
         if(is_numeric($c)){
        // It will convert celsius to fahrenheit
        $f = (($c * 9 / 5) + 32);
         }else{
             echo"Enter valid input";
         }
       // echo" Fahrenheit is: ".$f;
       if(is_numeric($c)){
       $f=readline("Enter temparature in fahrenheit:"); // value of fahrenheit 
       $c = ($f-32) * 5 / 9;}
       else{
        echo"Enter valid input";
    }
        // It will print the final output
        echo $c . " is Celsius". " ". $f .  " is Fahrenheit";
  
}
}
Conversion::tempConversion();
?>