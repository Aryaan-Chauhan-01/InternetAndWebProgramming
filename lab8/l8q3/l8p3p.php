<?php
if(isset($_POST['submit']))
{
$u=$_POST['data1'];
$t=$_POST['data2'];
for($i=$u;$i<=20;$i=$i+2)
{
for($j=$t;$j<=2;$j=$j+0.5){
echo "for vellocity ".$i." and time=".$j;
echo "<br>";
$s=($u*$t)+(1/2)*(9.8)*($j)*($j);
echo $s."is the positon";
echo "<br>";
}
}
}
?>