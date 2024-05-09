<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/style_for_task4(1).css">
  <title>Task5</title>
</head>

<body>
  <div class="block">
    <form name="mainform" action="Yurchuk_task5.php" method="POST" enctype="multipart/form-data">
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
for($i=0;$i<count($paragraphs);$i++){
    echo strlen($paragraphs[$i]).'<br>';
}



    ?>
  </div>
</body>

</html>