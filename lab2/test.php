<?php
require "../config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/style_for_task4-5.css">
  <title>Task5</title>
</head>

<body>
  <div class="block">
    <h3>Натисніть на зображення тостера</h3>

    <form class="bord" action="test.php" method="GET">
      <?php
      $array = ["<a href='task5.php?val=1'><img class='photo' src='images/blender.webp'></a>", 'images/toster.jpg', 'images/gril.webp', 'images/machine.webp', 'images/multivarka.jpg', 'images/free.jpg'];
      $arr = [];
      $arr = array_rand($array, 4);
      $print = $array[$arr[0]];
      $print2 = $array[$arr[1]];
      $print3 = $array[$arr[2]];
      $print4 = $array[$arr[3]];




      echo " <a href='task5.php?val=1'><img class='photo' src='$print' ></a>";
      echo " <a href='task5.php?val=2'><img class='photo' src='$print2' ></a>";
      echo " <a href='task5.php?val=3'><img class='photo' src='$print3' ></a>";
      echo " <a href='task5.php?val=4'><img class='photo' src='$print4' ></a>";

      $val = $_GET["val"];

      if ($print == 'images/blender.webp' || $print2== 'images/blender.webp' || $print3== 'images/blender.webp' || $print4== 'images/blender.webp') {

        echo 'Ви натиснули на блендер - це неправильно <br>';
        echo "<img class='photo' src='images/blender.webp'>";
      } else if ($print == 'images/toster.jpg' || $print2== 'images/toster.jpg' || $print3== 'images/toster.jpg' || $print4== 'images/toster.jpg') {
        echo 'Ви натиснули  на тостер - це правильно <br>';
        echo "<img class='photo' src='images/toster.jpg'>";
      } else if ($print == 'images/gril.webp' || $print2== 'images/gril.webp'|| $print3== 'images/gril.webp' || $print4== 'images/gril.webp') {
        echo 'Ви натиснули на гриль - це неправильно <br>';
        echo "<img class='photo' src='images/gril.webp'>";
      } else if ($print == 'images/machine.webp' || $print2== 'images/machine.webp' || $print3== 'images/machine.webp' || $print4== 'images/machine.webp') {
        echo 'Ви натиснули на кухонну машину - це неправильно <br>';
        echo "<img class='photo' src='images/machine.webp'>";
      }
      else if($print== 'images/multivarka.jpg' || $print2== 'images/multivarka.jpg' || $print3== 'images/multivarka.jpg' || $print4== 'images/multivarka.jpg'){
        echo 'Ви натиснули на мультиварку - це неправильно';
        echo "<img class='photo' src='images/multivarka.jpg'>";
      }
else if($print== 'images/free.jpg' || $print2== 'images/free.jpg' || $print3== 'images/free.jpg'|| $print4== 'images/free.jpg'){
  echo 'Ви натиснули на фритюрницю - це неправильно';
  echo "<img class='photo' src='images/free.jpg'>";
}
      ?>

    </form>

  </div>
</body>

</html>