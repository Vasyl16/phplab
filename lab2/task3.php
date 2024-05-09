<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/style_for_task1.css">
  <title>Task3</title>
</head>

<body>
  <div class="container">
    <h2>Заповніть форму</h2>
    <form action="task3.php" method="POST">
      <input class="inputing" type="text" name="firstNumber" placeholder="Введіть число">
      <input class="inputing" type="text" name="secondNumber" placeholder="Введіть число">
      
      <input class="submit" type="submit" value="Відправити">


    </form>
    <?php
    $numberOne = $_POST['firstNumber'];
    $numberTwo = $_POST['secondNumber'];
   

    if (2*$numberOne* $numberTwo != 0) {
    $first=2*$numberOne-$numberTwo;
    echo 'First value = ' . $first .'<br>';
      
    }
    else if($numberTwo!=0 || $numberOne!=3*$numberTwo){
      $second=2*$numberOne/$numberTwo;
      echo 'Second value = ' . $second . '<br>';
    }
    else{
      $third=$numberOne/$numberTwo-$numberOne*$numberTwo;
      echo 'Third value = ' . $third . '<br>';
    }
    ?>
  </div>
</body>

</html>