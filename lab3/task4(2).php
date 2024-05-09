<?php
require "../config.php";
$Arr=[];
$counter=0;
for($i=0;$i<50;$i++){
  $Arr[$i]=mt_rand(100,300);
  if($Arr[$i]%5==0){
    echo 'Numbers multiples of five : '.$Arr[$i].'<br>';
    $counter++;
  }
}
echo 'Number of multiples : '. $counter .'<br>' ;