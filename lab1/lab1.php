<?php

require("config.php");

header("Content-Type: text/html; charset=" . $config['charset']);
if (!empty($_GET["zm"])) {
  echo "Значення переданої змінної zm=" . $_GET["zm"];
} else {
  echo "zminna zm not fount";
}
$zm = $_GET["zm"];
if (!empty($_GET["ULogin"])) {
  echo "<br>Значення переданої змінної ULogin " . $_GET["ULogin"];
} else {
  echo "<br>zminna ULogin not fount";
}
$ULogin = $_GET["ULogin"];
?>
<html>
<title>PHP</title>

<head>
  <link rel="stylesheet" href="StyleCSS/style.css">
</head>

<body>
  <div id="nav">
    <h3>Приклади з теорії</h3>
    <ul>
      <li><a href="example1_1_5_1.php">Доступ до змінних форми post (приклад 1.1.5.1) </a></li><br>
      <li><a href="example1_1_5_2.php">Доступ до змінних форми get (приклад 1.1.5.2)</a></li><br>
      <li><a href="operatorIF.php">if, eseif, else (приклади з 1.1.15,1.1.16,1.1.17, 1.1.18 )</a></li><br>

      <li><a href="operator_switch.php">switch (приклад 1.1.19)</a></li><br>
      <li><a href="last_task.php">Last task</a></li><br>

    </ul>

    <h3 class='back'><a href="../">Повернутися в меню</a><br></h3>

  </div>
</body>

</html>