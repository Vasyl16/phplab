<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/style_for_task2.css">
  <title>Task3</title>
</head>

<body>
  <div class="mainBlock">
    <form action="Yurchuk_task3.php" method="POST" enctype="multipart/form-data">
      <input type="file" name="filename">
      <input class="submit" type="submit" value="Зчитати">
    </form>
    <?php
    $a = $_FILES['filename']['name'];
    $str = file("files/$a");
    echo "Вихідне ім'я файлу - " . $a . '<br>';
    echo "<table border=1px>";
    $i=0;
for(;$i<count($str);$i++){
  echo"<tr>";
echo "<td>".$str[$i]."</td>";
echo "</tr>";
}
    echo"</table>";
    $out="Всього у файлі tag2.txt описано тегів : $i";
    file_put_contents('files/out.txt',$out);
    $info=file_get_contents('files/out.txt');
echo"$info".'<br>';
    ?>
    
  </div>
</body>

</html>