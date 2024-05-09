<?php 
require"../config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/Style_for_task1.css">
  <title>Task1</title>
</head>
<body>
  <div class="block">
<form name="mainForm" method="POST" action="Yurchuk_task1.php">
<input type="email" name="email" placeholder="Введіть електронну адресу">
<input type="submit" name="submit" class="submit" value="Відправити">
</form>
<?php
$email = $_POST["email"];

if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email)) {
  echo "Електронну адресу введено коректно.";
} else {
  echo "Електронна адреса введена неправильно.";
}
?>


  </div>
</body>
</html>