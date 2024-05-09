<?php
require"../config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Task5</title>
</head>
<body>
  <?php
  $array=array("first"=>"Це перше речення.","second"=>"Це друге речення.","third"=>"Це третє речення");
  foreach($array as $key=>$value){
    echo"Key-->{$key}, Value-->{$value} ".'<br>';
  }
  echo'<br>';
  echo 'Змінений масив'.'<br>';
  $reversed=array_reverse($array);
  foreach($reversed as $key=>$value){
    echo "Key-->{$key}, Value-->{$value} " . '<br>';
    
  }
  $Students["Student1"]=array("name"=>'Андрій',"Algebra"=>'5', "Biology"=>'3', "physicalTraining"=>'<font color = red>2</font>', "Programming"=>'5',"total"=>'15');
  $Students["Student2"] = array("name"=>'Василь',"Algebra" => '<font color="red">2</font>', "Biology" => '4', "physicalTraining" => '5', "Programming" => '3',"total"=>'14');
  $Students["Student3"] = array("name"=>'Іван',"Algebra" => '3', "Biology" => '<font color="red">2</font>', "physicalTraining" => '4', "Programming" => '4',"total"=>'13');
  echo"<table border=1px>";
  echo"<tr><th>Name</th><th>Алгебра</th><th>Біологія</th><th>Фізичне виховання</th><th>Програмування</th><th>Сумарний бал</th></tr>";
  foreach ($Students as $key => $value) {
    echo "<tr>";

    foreach ($value as $iKey => $iValue) {
      
      echo "<td> $iValue</td> <br>";
      
    }
    echo"</tr>";
  }
  echo"</table>"
   ?>
</body>
</html>