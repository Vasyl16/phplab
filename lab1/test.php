<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php  
  $arr=array();
  for($i=0;$i<10;$i++){
$arr[$i]=rand(1,12);
  }
  for ($i = 0; $i < 10; $i++) {
    echo 'index '. $i+1 . '  value '. $arr[$i].'<br>';
  }
  ?>
</body>
</html>