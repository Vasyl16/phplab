<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="Style/style_for_task4(1).css">
  <meta charset="UTF-8">
  <title>Task4.5</title>
</head>

<body>
  <div class="block">
    <form name="mainform" action="Yurchuk_task4(5).php" method="POST" enctype="multipart/form-data">
      <input type="file" name="fileForSort">
      <input class="submit" type="submit" value="Знайти">
    </form>
    <?php
    $src = $_FILES["fileForSort"]["name"];
    $text = file_get_contents("files/$src");
    $dom = new DOMDocument();
    $paragraphs = array();
    $dom->loadHTML($text);
    foreach ($dom->getElementsByTagName('p') as $node) {

      $paragraphs[] = $dom->saveHTML($node);
    }
    
    $rand_key= array_rand($paragraphs, 1);
    echo $paragraphs[$rand_key];
    


    ?>
</body>

</html>