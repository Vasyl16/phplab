<?php 
require"../config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/style_for_task4(1).css">
  <title>Task4.1</title>
</head>
<body>
  <div class="block">
  <form name="mainform" action="Yurchuk_task4(1).php" method="POST" enctype="multipart/form-data">
    <input type="file" name="fileForSort">
<input class="submit" type="submit" value="Відсортувати файл">
  </form>
<?php
$fileName=$_FILES["fileForSort"]["name"];
$file=file_get_contents("files/$fileName");
if($file){
  $words=explode(' ',$file);
  sort($words);
  $result=implode(' ',$words);
  echo"$result";
}
?>
</div>
</body>
</html>