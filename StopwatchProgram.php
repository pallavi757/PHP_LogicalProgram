<?php
class Stopwatch{
   static function measureTime($start_t,$end_t) {
     echo "Enter 1 for start time \n Enter 2 for stop time \n";
     $option=readline("choose your option:");
     switch($option){
         case 1:
            $start_t=time();
            echo"\n",$start_t;
            Stopwatch::measureTime($start_t,$end_t);//Use recursion
            break;
            case 2:
                $end_t=time();
                echo "\n",$end_t;
                $elap=$end_t-$start_t;
                echo "$elap";
                break;
                default:
                echo"Enter valid option";
     }
    }
}
$start_t=0;
$end_t=0;
Stopwatch::measureTime($start_t,$end_t);
?>
