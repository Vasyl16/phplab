<?php
include_once("config.php");
header("Content-Type: text/html; charset=" . $config['charset']);
?>
<html>

<head>
  <link rel="stylesheet" href="StyleCSS/style_for_examples.css">
  <title>Приклад</title>
</head>

<body>
  <?php
  echo "<div>
1 - Обчислення максимальної температури<br>
2 - Обчислення мінімальної температури<br>
3 - Обчислення середньої температури<br>
<form action='last_task.php' method='post'>
<label for='choice'>Оберіть що ви хочете обчислити</label>
<input type='text' name='choice' placeholder='Введіть варіант(1-3)'><br>
Введіть 3 цілич числа:<br>
<input type='text' name='max' ><br>
<input type='text' name='avg' ><br>
<input type='text' name='min' ><br>


<input type='submit' value='Обчислити'>
</form></div>
";
  if (!empty($_POST["choice"])) {
    $number = $_POST['choice'];
    $numberOne=$_POST['max'];
    $numberTwo = $_POST['avg'];
    $numberThree = $_POST['min'];
$result=0;
    switch ($number) {
      case '1':
        echo "<h1>Результат</h1>".$result=$numberOne+$numberTwo+$numberThree ;
        break;
      case '2':
        echo $result=($numberOne + $numberTwo + $numberThree)/3;
        break;
      case '3':
        echo
        $result = ($numberOne + $numberTwo + $numberThree) / 6;
        break;
      default:
        echo "Некоректно введені дані, повторіть спробу";
        break;
    }
  }

 
  ?>

</body>

</html>