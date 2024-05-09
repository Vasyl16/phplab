<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/style_for_task2.css">
  <title>Task2</title>
</head>

<body>
  <div class="mainBlock">
    <form action="Yurchuk_task2.php" method="POST" enctype="multipart/form-data">
      <input type="file" name="filename">
      <input class="submit" type="submit" value="Зчитати">
    </form>

    <?php
    $a = $_FILES['filename']['name'];
    $str = file("files/$a");
    echo "Вихідне ім'я файлу - " . $a . '<br>';
    echo "<table border=1px>";
    echo "<tr>";
    echo "<td>$str[0]</td>";
    echo "<td>$str[1]</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>$str[2]</td>";
    echo "<td>$str[3]</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>$str[4]</td>";
    echo "<td>$str[5]</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>$str[6]</td>";
    echo "<td>$str[7]</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>$str[8]</td>";
    echo "<td>$str[9]</td>";
    echo "</tr>";

    echo "</table>";
    ?>
    <form action="Yurchuk_download_for_task2.php" method="POST" enctype="multipart/form-data">
      <input type="file" name="download">
      <input class="submit" type="submit" value="Загрузити">
    </form>
  </div>
</body>

</html>