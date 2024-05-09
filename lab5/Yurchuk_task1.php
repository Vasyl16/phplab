<?php
require"../config.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/style_for_task1.css">
  <title>Task 1</title>
</head>
<body>
  <div class="blockMain">
  <form name="fileForm" method="POST" action="Yurchuk_task1.php">
<label for="CheckFileName">Ім'я файлу:</label><br>
<input type="text" name="CheckFileName" placeholder="Введіть ім'я файлу">
<input class="submit" type="submit" value="Готово">
  </form>
  <?php
  $a= $_POST["CheckFileName"];
  $check=file_exists($a);
  if($check){
    echo "Файл $a знаходиться в даному каталозі"."<br>";
    echo"Розмір файлу в байтах : ". filesize($a)."<br>";
    echo "Час створення файлу : " . date("F d Y H:i:s.", filectime($a)) . "<br>";
    echo "Час останньої модифікації : " . date("F d Y H:i:s.",filemtime($a)) . "<br>";
    echo "Вміст файлу : " . "<br>";
    include($a);


  }
  else{
    echo"Файл з іменем $a у поточному каталозі не існує ";
  }
   ?>
  </div>
</body>
</html>