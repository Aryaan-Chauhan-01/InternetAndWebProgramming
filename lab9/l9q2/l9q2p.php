<?php
if(isset($_POST['submit']))
{
$a=$_POST['data1'];
$b=$_POST['data2'];
$i=$_POST['data3'];
$c=$_POST['data4'];

$d1=$i*(0.3);
$d2=$c*(0.2);
$d3=sqrt($b);
$e=$d1+$d2-$d3;
echo "Extra bonus points =".$e;
$handle=fopen('data.txt','w');
fwrite($handle,$e);
fclose($handle);
}
?>