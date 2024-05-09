<?php
require"../config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Task3</title>
  <link rel="stylesheet" href="Style/style.css">
</head>
<body>
  <h3>Task3</h3>
  <div class="con">
  <?php
  $my_topic=array("2"=>'Blender',"3"=>'Toster','4'=>'Combine',"5"=>'Deep fryer');
  foreach($my_topic as $key=>$value){
    echo "Index : {$key}. Value = {$value}".'<br>';
  }
  echo"<br>";
  $flipped=array_flip($my_topic);
  foreach ($flipped as $key => $value) {
    echo "Index : {$key}. Value = {$value}" . '<br>';
  }
  ?>
  </div>
</body>
</html>