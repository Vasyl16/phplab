<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/style_for_task1.css">
  <title>Task1</title>
</head>

<body>
  <div class="container">
    <h2>Заповніть форму</h2>
    <form action="task1.php" method="POST">
      <input class="inputing" type="text" name="firstNumber" placeholder="Введіть число">
      <input class="inputing" type="text" name="secondNumber" placeholder="Введіть число">
      <input class="submit" type="submit" value="Відправити">


    </form>
    <?php
    $numberOne = $_POST['firstNumber'];
    $numberTwo = $_POST['secondNumber'];
    if ($numberOne && $numberTwo > 0) {
      
      echo "$numberOne - $numberTwo = " . $subtraction = $numberOne - $numberTwo . '<br>';
      echo "$numberOne * $numberTwo = " . $multiplication = $numberOne * $numberTwo . '<br>';
      echo "$numberOne % $numberTwo = " . $remainder = $numberOne % $numberTwo . '<br>';
    }
    ?>
  </div>
</body>

</html>