<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/style_for_task4(1).css">
  <title>Task4.3</title>
</head>

<body>
  <div class="block">
    <form name="mainform" action="Yurchuk_task4(3).php" method="POST" enctype="multipart/form-data">
      <input type="file" name="fileForSort">
      <input class="submit" type="submit" value="Вивести найдовше слово тексту і його довжину">
    </form>
    <?php
    $src=$_FILES["fileForSort"]["name"];
    $text=file_get_contents("files/$src");
    $data=explode(' ',$text);
    $num=[];
    for($i=0;$i<count($data);$i++){
      $num[$i]=strlen($data[$i]);
      if(strlen($data[$i])==max($num)){
      echo"$data[$i] ". strlen($data[$i]). '<br>';
      }
      }
    
    
    ?>
  </div>
</body>

</html>