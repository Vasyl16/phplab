<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/style_for_task1.css">
  <title>Task2</title>
</head>

<body>
  <div class="container">
    <h2>Заповніть форму</h2>
    <form action="task2.php" method="POST">
      <input class="inputing" type="text" name="firstNumber" placeholder="Введіть число">
      <input class="inputing" type="text" name="secondNumber" placeholder="Введіть число">
      <input class="inputing" type="text" name="thirdNumber" placeholder="Введіть число">
      <input class="submit" type="submit" value="Відправити">


    </form>
    <?php
    $numberOne = $_POST['firstNumber'];
    $numberTwo = $_POST['secondNumber'];
    $numberThree = $_POST['thirdNumber'];

    if ($numberOne && $numberTwo > 0) {
$F=$numberOne**($numberTwo**$numberThree)+2*$numberOne*$numberThree;
      echo 'Result = ' .$F. '<br>';
      echo 'First number = '.$numberOne. ' ' . 'Second number = ' . $numberTwo . ' ' . 'Third number = ' . $numberThree .'<br>';
      
    }
    ?>
  </div>
</body>

</html>