<?php 
require"../config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/Yurchuk_style_for_task1.css">
  <title>Task5</title>
</head>
<body>
  <div class="block">
<?php
class Multiplication{
public $number;

function __construct($number=1)
{
  $this->number=$number;
}
public function multi(){
echo'<table border=1px>';
echo'<tr>';
for($i=0;$i<=9;$i++){
echo '<td>';
echo $this->number.'*'.$i.'='.($this->number*$i).'<br>';
echo '</td>';
}
echo'</tr>';
echo'</table>';
echo'<hr>';
}
}
$first=new Multiplication(2);
$second=new Multiplication(3);
$third = new Multiplication(4);
$fourth = new Multiplication(5);
$fifth = new Multiplication(6);
$first->multi();
$second->multi();
$third->multi();
$fourth->multi();
$fifth->multi();

?>

  </div>
</body>
</html>