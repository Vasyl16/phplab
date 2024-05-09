<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="Style/Yurchuk_style_for_task3.css">
  <meta charset="UTF-8">
  <title>Task3</title>
</head>

<body>
  <div class="block">
    <form action="Yurchuk_task3.php" name="main" method="POST">
      <label for="number">Введіть номер телефону:</label>
      <input type="text" name="numberOfPhone" placeholder="+38(097)6594888">
      <input type="submit" class="submit" value="Готово">

    </form>
    <?php
    $number = $_POST["numberOfPhone"];
    if (preg_match('/\+\d{2}\(\d{3}\)\d{7}/', $number)) {
      echo "<p>Номер введено коректно</p>";
    } else {
      echo "<p>Номер введено неправильно</p>";
    }
    ?>
  </div>
</body>

</html>