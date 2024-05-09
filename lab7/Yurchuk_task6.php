<?php
require"../config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/Yurchuk_style_for_task1.css">
  <title>Task6</title>
</head>
<body>
  <div class="block">
  <?php 
class Countries{
  public $name_coutry;
  public $population;
  public $capital;
  function __construct($name_country="Ukraine",$population="45 millions",$capital="Kyiv")
  {
    $this->name_coutry=$name_country;
    $this->population=$population;
    $this->capital=$capital;
  }
  function getinfo(){
    echo'<table border=1px>';
echo'<tr>';
echo '<td>'.'Назва Країни '.'</td>'.'<td>'.$this->name_coutry.'</td>';
echo'</tr>';
      echo '<tr>';
      echo '<td>' . 'Населення ' . '</td>' . '<td>' . $this->population . '</td>';
      echo '</tr>';
                     echo '<tr>';
                     echo '<td>' . 'Столиця ' . '</td>' . '<td>' . $this->capital . '</td>';
                     echo '</tr>';
    echo'</table>';
    echo'<hr>';
  }
}
$array=[$first=new Countries("Yemen","29 millions","Sana'a"),$second=new Countries("Poland","37 millions","Warsaw"),$third=new Countries("Italy","60 millions","Rome")];
for($i=0;$i<count($array);$i++){
  $array[$i]->getinfo();
}

  ?>
  </div>
</body>
</html>