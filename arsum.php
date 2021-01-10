<?php
$arr = array(11,5,31,2,35);   
$sum = 0; 
$len = count($arr);  
for($i=0;$i<=$len-1;$i++) 
{ 
   $sum = $sum + $arr[$i];  
}
echo $sum;  
?>