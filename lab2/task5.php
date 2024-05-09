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

    <form class="bord" action="task5.php" method="GET">
<?php
$array=["<a href='task5.php?val=1'><img class='photo' src='images/blender.webp'></a>", 'images/toster.jpg', 'images/gril.webp', 'images/machine.webp', 'images/blender.webp', 'images/free.jpg'];
$arr=[];
$arr=array_rand($array,4);
 $print = $array[$arr[0]];
 $print2=$array[$arr[1]];
$print3 = $array[$arr[2]];
$print4 = $array[$arr[3]];
echo $array[0];

 

echo " <a href='task5.php?val=1'><img class='photo' src='$print' ></a>";
echo " <a href='task5.php?val=2'><img class='photo' src='$print2' ></a>";
echo " <a href='task5.php?val=3'><img class='photo' src='$print3' ></a>";
echo " <a href='task5.php?val=4'><img class='photo' src='$print4' ></a>";

$val = $_GET["val"];

if ($val == 1) {
  
  echo 'Ви натиснули на блендер - це неправильно <br>';
  echo "<img class='photo' src='images/blender.webp'>";
} else if ($val == 2) {
  echo 'Ви натиснули  на тостер - це правильно <br>';
  echo "<img class='photo' src='images/toster.jpg'>";
  
} else if ($val == 3) {
  echo 'Ви натиснули на гриль - це неправильно <br>';
  echo "<img class='photo' src='images/gril.webp'>";
} else if ($val == 4) {
  echo 'Ви натиснули на фритюрницю - це неправильно <br>';
  echo "<img class='photo' src='images/free.jpg'>";
}

      ?>

    </form>

  </div>
</body>

</html>