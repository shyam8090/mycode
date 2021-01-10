  <?php
$arr = array(0,1,0,1,1,1,0,0,0,1,1,0,0,0,1,1,1,1,1,1,0,0,0,1,1); 
$arrlen=count($arr);
echo "Length of Array:".$arrlen;
echo "<br>";
echo "Array:";

for($x=0;$x<$arrlen;$x++)
  {
  echo $arr[$x];
  echo " ";
}
echo "<br>";
$sum=0;
$max=0;
for($z=0;$z<$arrlen;$z++)
{
  if($arr[$z]==0)
  {
  	$sum=0;
  }
  else
  {
    $sum++;
    if($sum>$max)
    {
    	$max=$sum;
    }
    	
  }
  
}
echo "max consecutive 1's is: ".$max;


?>