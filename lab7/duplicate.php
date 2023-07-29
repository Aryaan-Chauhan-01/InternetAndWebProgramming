<?php
$a1=readline("Enter number 1");
$a2=readline("Enter number 2");
$a3=readline("Enter number 3");
$a4=readline("Enter number 4");
$a5=readline("Enter number 5");
$sum=$a1+$a2+$a3+$a4+$a5;
$s2=3*$sum;
$product=$a1*$a2*$a3*$a4*$a5;
$p2=2+$product;
if($a1==$a2 ||$a1==$a3 ||$a1==$a4 ||$a1==$a5)
{
 echo "\nDUPLICATES the sum is".$s2;
}
else if($a1==$a2 ||$a2==$a3 ||$a2==$a4 ||$a2==$a5)
{
 echo "\nDUPLICATES thrice the sum of numbers is".$s2;
}
else if($a3==$a2 ||$a1==$a3 ||$a3==$a4 ||$a3==$a5)
{
 echo "\nDUPLICATES thrice the sum of numbers is".$s2;
}
elseif($a4==$a2 ||$a4==$a3 ||$a1==$a4 ||$a4==$a5)
{
 echo "\nDUPLICATES thrice the sum of numbers is".$s2;
}
else if($a5==$a2 ||$a5==$a3 ||$a5==$a4 ||$a1==$a5)
{
 echo "\nDUPLICATES thrice the sum of numbers is".$s2;
}
else
{
echo "ALL UNIQUE twice the products of numbers is".$p2;
}
?>