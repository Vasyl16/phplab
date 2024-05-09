<?php
require "../config.php";
$Arr=[];
$n=10;
$hundr=100;

for($i=0;$i<70;$i++){
  $Arr[$i]=mt_rand(1,200);
  if($Arr[$i]>$n && $Arr[$i]<$hundr && $Arr[$i]%2!=0 && $Arr[$i]%3!=0){
    echo 'Natural numbers : ' .$Arr[$i] .'<br>';
  }
}



