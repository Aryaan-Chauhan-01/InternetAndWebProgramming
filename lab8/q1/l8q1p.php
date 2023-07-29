<?php
if(isset($_POST['submit']))
{
  $nos=$_POST['data'];
  $n=explode(",",$nos);
  $l=sizeof($n);
  for($i=0;$i<$l;$i++)
  {
   echo $n[$i];
  }
  echo "<br>The sorted numbers are<br>";
  for($i=0;$i<$l-1;$i++)
  {
   for($j=$i+1;$j<$l;$j++)
   {
    if($n[$i]>$n[$j])
    {
     $t=$n[$i];
     $n[$i]=$n[$j];
     $n[$j]=$t;
    }
   }
  }
  foreach($n as $o)
  {
   echo $o."\t";
  }
}
?>
