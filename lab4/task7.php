<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Task7</title>
  <link rel="stylesheet" href="Style/style_for_task7.css">
</head>

<body>

  <form name="formSecond" class="second_form" method="POST" action="task7.php">
    <span >Чому дорівнює даний вираз 20*14+20?</span><br>
    <input type="radio" value="1" name="radio_button">
    <label for="valuOne">290</label><br>
    <input type="radio" value="2" name="radio_button">
    <label for="valuTwo">280</label><br>
    <input type="radio" value="3" name="radio_button">
    <label for="valuThree">300</label><br>
    <hr size="2">
    <span>Чому дорінює даний вираз: 13*13?</span><br>
    <input type="checkbox" name="checkbox_button" value="1">
    <label for="valuOne">139</label><br>
    <input type="checkbox" name="checkbox_button" value="2">
    <label for="valuTwo">169</label><br>
    <input type="checkbox" name="checkbox_button" value="3">
    <label for="valueThree">109</label><br>
    <hr size="2">
    <span>Чому дорівнює даний вираз: 220/4*5 </span><br>
    <select name="selecting_first[]" size="1">
      <option value="1">155</option>
      <option value="2">295</option>
      <option value="3">275</option>
    </select>
    <hr size="2">
    <span>Оберіть бренди одягу,які вам найбільше подобаються </span><br>
    <select name="selecting[]" size="6" multiple>
      <option value="1" selected>LOUIS VUITTON</option>
      <option value="2">PRADA</option>
      <option value="3">CHANEL</option>
      <option value="4">GUCCI</option>
      <option value="5">EMPORIO ARMANI</option>
      <option value="6">VERSACE</option>

    </select>
<br>

<input class="submit" type="submit" value="Відправити форму"><br>
<input class="reset" type="reset" value="Очистити форму">
<?php
if($_POST["radio_button"]!='' && $_POST["checkbox_button"] != '' && $_POST["selecting_first"] != '' && $_POST["selecting"] != ''){
$array["radio_button"]=$_POST["radio_button"];
$array["checkbox_button"]=$_POST["checkbox_button"];

echo "<table border=1px>";
echo "<tr><th>Чому дорівнює даний вираз 20*14+20?</th><th>Чому дорінює даний вираз: 13*13?</th><th>Чому дорівнює даний вираз: 220/4*5</th><th>Оберіть бренди одягу,які вам найбільше подобаються</th></tr>";
echo"<tr>";
foreach($array as $key=>$value){
echo "<td> Був обраний варіант: $value </td>";
}

  foreach ($_POST["selecting_first"] as $keyT => $valueT) {
    echo"<td>Був обраний варіант: $valueT</td>";
  }

foreach($_POST["selecting"] as $keyTh=>$valueTh){
  echo "<td>Був обраний варіант: $valueTh</td>";
}
echo"</tr>";
  echo "</table>";

}
else{
  echo "Дайте відповідь на всі запитання";
}
 ?>
  </form>
</body>

</html>