<?php
require "../config.php";
$Arr=[];
for($i=0;$i<50;$i++){
  $Arr[$i]=mt_rand(1,100);
  if($Arr[$i]%2!=0)
  {
    echo 'Odd : '.$Arr[$i].'<br>';
  }
}


