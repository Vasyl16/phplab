<?php
require("../config.php");
include_once("function.php");
?>
<html>

<head>
  <link rel="stylesheet" href="Style/style_for_task6.css">


</head>
<title>task6</title>

<div class="container">
  <H2>PHP. Робота з функціями</H2>

  <form action="task6.php" method="get">
    <input class="input" type="text" name="formvariable" placeholder="Введіть натуральне число">
    <input class="submit" type="submit" value="Додати">
  </form>
  <?php
  $variable = $_GET['formvariable'];
  if ($variable != 0 && $variable > 0) {
    echo_fun();
  }

  ?>
</div>
<?php 
include_once "task7.php";
?>

</html>