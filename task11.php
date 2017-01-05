<?php
$numb=$_POST['number'];
$sum=0;
for ($x=1; $x<$numb; $x++) 
{
for ($y=1; $y<$numb; $y++) 
{ {
if (($x % $y) == 0 and ($x<>$y))
$sum=$sum+$y;

}

}
if ($sum=$x)
echo "<p>".$x."</p>" ;
}

?>