<?php
require "../config.php";
require "function.php";
$my_array = array('Рядок 1', 'Рядок 2', 'Рядок 3');
create_table2($my_array,3,8,8);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/style_for_lab3links.css">
  <title>Links on tasks</title>
</head>
<body>
  <div class="container">
  <ul class="nav">
    <li class="blue"><a class="white" href="task2.php">Завдання 2</a></li>
    <li class="blue"><a class="white" href="task3.php">Завдання 3</a></li>
    <li class="blue"><a class="white" href="task4(1).php">Завдання 4.1</a></li>
    <li class="blue"><a class="white" href="task4(2).php">Завдання 4.2</a></li>
    <li class="blue"><a class="white" href="task4(3).php">Завдання 4.3</a></li>
    <li class="yellow"><a href="task5(1).php">Завдання 5.1</a></li>
    <li class="yellow"><a href="task5(2).php">Завдання 5.2</a></li>
    <li class="yellow"><a href="task6.php">Завдання 6</a></li>
    <li class="yellow"><a href="task7.php">Завдання 7</a></li>
  </ul>
  </div>
</body>
</html>




