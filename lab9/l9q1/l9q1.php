<?php
$handle=fopen('employee.txt','w');
fwrite($handle,"ID-Name-Qualification-Designation\n");
echo "write ID, name Qualification and designation of 5 employees\n<br>";
for($i=0;$i<5;$i++)
{
$s="";
$id=readline();
$na=readline();
$qa=readline();
$de=readline();
$s=$s.$id." - ".$na." - ".$qa." - ".$de;
fwrite($handle,$s.PHP_EOL);
}
copy('employee.txt','copyofemployee.txt');
rename('copyofemployee.txt','copy_1.txt');
fclose($handle);
?>
