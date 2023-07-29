<?php
$a=readline("Enter value of a");
$b=readline("Enter value of b");
if(a<b)
{
for($i=$a+1;$i<$b+2;$i++)
{
 $sqr=$i*$i;
 echo.$sqr."\t";
}
}
else
{
 echo"Invalid";
}
?>