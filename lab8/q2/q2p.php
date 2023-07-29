<?php
if(isset($_POST['submit']))
{
 $s1=$_POST['data1'];
 $s2=$_POST['data2'];
 $s3=$_POST['data3'];
 $s4=$_POST['data4'];
 $s5=$_POST['data5'];
 echo "Reversed string1 :".strrev($s1);
 echo "<br>";
 echo "\nLength of string 2 :".strlen($s2);
 echo "<br>";
 echo "\nSub-string of input string3 :".substr($s3,2,4);
 echo "<br>";
 echo "\nPosition of wor in string 4 :".strpos($s4,"wor");
 echo "<br>";
 echo "\nNumber of words in string 5 :".str_word_count("$s5");
}
?>