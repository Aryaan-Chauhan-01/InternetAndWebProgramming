<?php
for($i=1;$i<4;$i++)
{
echo "For employee ".$i."\n";
$basic=10000;
$s=readline("Enter the % sales");
if($s=100)
{
$pi=1*$basic;
$sum=$basic+$pi;
echo "\nBasic =".$basic."+ performance incentive= ".$pi."Total".$sum;
}
else if($s>=75 && $s<100)
{
$pi=0.5*$basic;
$sum=$basic+$pi;
echo "\nBasic =".$basic."+ performance incentive=".$pi."Total".$sum;
}
else
{
$pi=0.1*$basic;
$sum=$basic+$pi;
echo "\nBasic =".$basic."+ performance incentive=".$pi."Total".$sum;
}
}
?>