<?php
require "../config.php";
$i=0;
$n=10;
$k=10;
$k_second=1;
$n_second=1;
$i_second=0;
while($n<=20){
  $array[$i]=$n*$n;
  $n++;
  $i++;
}
for($i=0;$i<=10;$i++){
echo 'Square of number  '.$k .' = ' .$array[$i].'<br>';
$k++; 
}
echo '<br>';
while($n_second<=10){
  $array_second[$i_second]=$n_second*$n_second*$n_second;
  $n_second++;
  $i_second++;
}


for ($i = 0; $i < 10; $i++) {
  echo 'Cube of number  ' . $k_second . ' = ' . $array_second[$i] . '<br>';
  $k_second++;
}
$double_array=[];
$double_array=array_merge($array,$array_second);
echo"<br>";
echo " Merge array ".'<br>';
foreach($double_array as $key=> $value){
echo "{$key} => {$value}".'<br>';
}

?>