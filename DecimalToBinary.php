<?php
class DecToBinary{
    static function decToBin()
        {
$num=8;
$i=0;
while($num>0)
{
    $rem[$i]=$num%2;
    $num=(int)$num/2;
    $i++;
}
for($j=$i-1;$j>=0;$j--)
echo $rem[$j];
echo "\n";
        }
    
}
DecToBinary::decToBin();
?>
