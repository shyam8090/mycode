/*You are given an array of values, (positive, negative values both, but only integers) and a value.
You have to print all the pairs whose sum is the given value.
Write a function to do this.*/


<?php
$arr = array(0,1,3,4,-5,6,7,7,8,-9,10,11,-12,13,-14,15,16,17,18,19,-20,-21,22,23,24,25,-26,27,55,29,30,31,32,33,34,35); 
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
for($z=0;$z<$arrlen;$z++)
{
  for($y=$z+1;$y<=$arrlen-1;$y++)
  {
	  if($arr[$z]+$arr[$y]==50)
	  {
	  	echo "pair of digit:".$arr[$z]."and".$arr[$y];
	  echo "<br>";
	}
  }
}



?>
