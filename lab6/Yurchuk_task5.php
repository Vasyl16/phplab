<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="Style/Yurchuk_style_for_task5.css">
  <meta charset="UTF-8">
  <title>Task5</title>
</head>

<body>
  <div class="block">
    <form name="main" action="Yurchuk_task5.php" method="POST">
      <input type="checkbox" name="first">
      <label for="firstcheckbox">a)тег</label><br>
      <input type="checkbox" name="second">
      <label for="firstcheckbox">b)HTML</label><br>
      <label  for="firstcheckbox">c)Введіть частину слова</label><br>
      <input class="entering" placeholder="word" type="text" name="third">
      <input type="submit" class="submit" value="Відправити">
    </form>
    <?php
    $first = $_POST["first"];
    $second = $_POST["second"];
    $third = $_POST["third"];
    $file = [];
    $fileSecond = [];
    $src = file_get_contents('text.txt');
    if ($first) {
      if (preg_match_all('/тег|Тег/', $src, $matches)){
      echo "<p>"; 
      print_r($matches);
      echo "</p>";
      }
    }
    if ($second) {
      if (preg_match_all('/html|HTML/', $src, $matches)) {
        $file = $matches;
        echo "<p>";
        print_r($file);
        echo "</p>";
      }
    }
    if ($third) {
      if (preg_match_all('/\w+/', $src, $matches)) {
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