<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/style_for_task4-5.css">
  <title>Task4</title>
</head>

<body>
  <div class="block">
    <h3>Натисніть на зображення тостера</h3>
    <form class="bord" action="task4.php" method="GET">

      <a href="task4.php?val=1"><img class="photo" src="images/blender.webp"></a>
      <a href="task4.php?val=2"><img class="photo" src="images/toster.jpg"></a>
      <a href="task4.php?val=3"><img class="photo" src="images/gril.webp"></a>
      <a href="task4.php?val=4"><img class="photo" src="images/free.jpg"></a>

    </form>
    <?php
    $val = $_GET["val"];
    if ($val == 2) {
      echo 'Ви натиснули  на тостер - це правильно <br>';
      echo "<img class='photo' src='images/toster.jpg'>";
    } else if ($val == 1) {
      echo 'Ви натиснули на блендер - це неправильно <br>';
      echo "<img class='photo' src='images/blender.webp'>";

    } else if ($val == 3) {
      echo 'Ви натиснули на гриль - це неправильно <br>';
      echo "<img class='photo' src='images/gril.webp'>";

    } else if ($val == 4) {
      echo 'Ви натиснули на фритюрницю - це неправильно <br>';
      echo "<img class='photo' src='images/free.jpg'>";

    }
    ?>
  </div>
</body>

</html>