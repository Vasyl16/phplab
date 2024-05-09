<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="Style/Yurchuk_style_for_task2.css">
  <meta charset="UTF-8">
  <title>Task2</title>
</head>

<body>
  <div class="block">
  <form name="main" action="Yurchuk_task2.php" method="POST">
    <input type="checkbox" name="first">
    <label for="firstcheckbox">a)Вивести весь заданий текст</label><br>
    <input type="checkbox" name="second">
    <label for="firstcheckbox">b)Вивести тільки назви відкриваючих тегів</label><br>
    <input type="checkbox" name="third">
    <label for="firstcheckbox">c)Вивести назви відкриваючих тегів разом із кутовими дужками</label><br>
<input type="submit" class="submit" value="Відправити">
  </form>
  <?php
$first=$_POST["first"];
$second=$_POST["second"];
$third=$_POST["third"];
$file=[];
$fileSecond=[];
$src=file_get_contents('text.txt');
if($first){
  echo "<p>". file_get_contents('text.txt')."</p>";
}
if($second){
   if(preg_match_all('/[a-zA-Z]{1,7}/',$src,$matches)){
$file=$matches;
echo"<p>";
    print_r($file);
    echo"</p>";
  }
}
if($third){
    if (preg_match_all('/\<\s\w{1,7}\s\>/', $src, $matches)) {
      $fileSecond = $matches;
      echo "<p>";
      print_r($fileSecond);
      echo "</p>";
    }
}
  ?>

  </div>
</body>

</html>