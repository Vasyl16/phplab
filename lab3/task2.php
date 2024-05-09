<?php
require "../config.php";
$array=array();
for($i=0;$i<10;$i++){
  $array[$i]=mt_rand(1,27+10);
}
for($i=0;$i<10;$i++){
  echo 'Index : ' . $i + 1 . ' Value : ' . $array[$i].'<br>';

}
 $min=array_keys($array,min($array))[0];
$max = array_keys($array, max($array))[0];
$avg=array_sum($array)/count($array);
echo 'Index of min value : ' . $min+1 . ' Value : ' . min($array).'<br>';
echo 'Index of max value : ' . $max + 1 . ' Value : ' . max($array). '<br>';
echo 'Middle value = ' . $avg;

