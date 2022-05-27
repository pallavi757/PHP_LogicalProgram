<?php
class VendingMachine{
  static function findNote($money,$moneyArray){
      while($money>0) {
          if($money>=1000){
          $note=floor(($money/1000));
          $money=$money-($note*1000);
          $moneyArray[1000]=$note;
      }elseif($money>=500){
          $note=1;
          $money=$money-500;
          $moneyArray[500]=$note;
      }elseif($money>=100){
        $note=floor(($money/100));
        $money=$money-($note*100);
        $moneyArray[100]=$note;
      }
     elseif($money>=50){
        $note=1;
        $money=$money-50;
        $moneyArray[50]=$note;
  }elseif($money>=10){
  $note=floor(($money/10));
  $money=$money-($note*10);
  $moneyArray[10]=$note;
}
 elseif($money>=5){
    $note=1;
    $money=$money-5;
    $moneyArray[5]=$note;
}
elseif($money>=2){
    $note=floor(($money/2));
    $money=$money-($note*2);
    $moneyArray[2]=$note;  

}
else{
    $note=1;
    $money=$money-1;
    $moneyArray[1]=$note;
}
}
self::display($moneyArray);
  }

static function display($moneyArray)
{
    foreach($moneyArray as $key=>$values)
    {
        echo $key. " notes ".$values."\n";
    }
}
function main()
    {
        $money=readline("Enter amount:");
        $moneyArray=array();
        if(is_numeric($money)&&$money>0)
        {
            self::findNote($money,$moneyArray);
        }else{
            echo"Enter valid amount:";
        }
    }
}
$resultobj=new VendingMachine();
$resultobj->main();
?>