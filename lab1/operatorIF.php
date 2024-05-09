<?php
include_once("config.php");
header("Content-Type: text/html; charset=" . $config['charset']);
?>
<html>

<head>
  <link rel="stylesheet" href="StyleCSS/style_for_examples.css">
  <title>Приклад операторів if, eseif, else</title>
</head>

<body>
  <?php
  if (!empty($_POST["number"])) {
    $number = $_POST['number'];
    if ($number > 0) {
      echo "<div>Число " . $number . " - додатнє</div>";
    } elseif ($number < 0) {
      echo "<div>Число " . $number . " - від'ємне<div>";
    } else {
      echo "<div>Число " . $number . " дорівнює нулю</div>";
    }
  }


  echo "<br><div> Перевірка числа(додатнє, від'ємне або нуль)<br>
<form action='forOperatorIF.php' method='post'>
Введіть число:<br>
<input type='text' name='number'><br>
<input type='submit' value='Перевірити'>
</form>
</div>
<h3 class='back'><a href='lab1.php' >Назад</a></h3>";
  ?>
</body>

</html>