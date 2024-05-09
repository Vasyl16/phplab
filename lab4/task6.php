<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Task6</title>
  <link rel="stylesheet" href="Style/style_for_task6.css">
</head>

<body>
  <form action="task6.php" class="form" name="formOne" method="POST">
    <label for="surname">Прізвище:</label>
    <input type="text" name="surname" placeholder="Введіть прізвище"><br>
    <label for="name">Ім'я:</label>
    <input type="text" name="name" placeholder="Введіть ім'я "> <br>
    <label for="email">Електронна адреса:</label>
    <input type="email" name="email" placeholder="Введіть email"><br>
    <label for="pass">Пароль:</label>
    <input type="password" name="pass" placeholder="Введіть пароль"><br>
    <label for="repass">Перевірка паролю:</label>
    <input type="password" name="repass" placeholder="Введіть повторно пароль"><br>
    <input class="submit" type="submit" value="Відправити">

    <?php
    $array["surname"] = $_POST["surname"];
    $array["name"] = $_POST["name"];
    $array["email"] = $_POST["email"];
    $array["pass"] = $_POST["pass"];
    $array["repass"] = $_POST["repass"];

    if ($_POST != '' && $_POST["pass"] == $_POST["repass"]) {
      echo "<table border=1px>";
      echo "<tr>";
      echo "<th>Surname</th>";
      echo "<th>Name</th>";
      echo "<th>Email</th>";
      echo "<th>Password</th>";
      echo "<th>Repass</th>";
      echo "</tr>";
      echo "<tr>";
      foreach ($array as $key => $value) {
        echo "<td>$value</td>  ";
      }
      echo "</tr>";
      echo "</table>";
    } else {
      echo "Заповніть всі поля коректно";
    }
    ?>
  </form>

</body>

</html>