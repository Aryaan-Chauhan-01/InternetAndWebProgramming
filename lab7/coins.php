<?php
$m=123;
$n=readline("Enter the number of your choice");
if($n<$m)
{
 echo "\nSorry you lose and gain no points";
}
else
{
$p1=$m*$m;
$p2=$n*$n;
$d=$p2-$p1;
echo "\nYou gain ".$d." points!";
}
?>