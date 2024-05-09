<!DOCTYPE html>
<?php
require"../config.php" ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Task4</title>
  <link rel="stylesheet" href="Style/stylefortask4.css">
</head>
<body>
  <div class="container">
  <?php 
  $country["Ukraine"]=array("name"=>"Україна","capital"=>"Київ","population"=>"45");
  $country["Poland"] = array("name" => "Польща", "capital" => "Варшава", "population" => "38");
  $country["Canada"] = array("name" => "Канада", "capital" => "Оттава", "population" => "38");
  echo"<table border=1px>";
echo"<tr><th>Назва</th>  <th>Столиця</th> <th>Населення</th></tr>".'<br>';
  
  foreach ($country as $key => $value) {
    echo "<tr>";
    foreach ($value as $iKey => $iValue) {
      echo "<td> $iValue</td> <br>";
    }
    echo "</tr>";
  }
echo "</table".'<br>';
  echo "Столиця України - " . $country["Ukraine"]["capital"] .'<br>';
  echo "Столиця Польщі - " . $country["Poland"]["capital"].'<br>';
  echo "Столиця Канади - " . $country["Canada"]["capital"].'<br>';

  foreach ($country as $key => $value) {
    echo "Поточна країна - $key.<br>";
    foreach ($value as $iKey => $iValue) {
      echo " ---> $iKey - $iValue <br>";
    }
  }
  echo"<br>";
  print_r($country);
  
  ?>
  </div>
</body>
</html>