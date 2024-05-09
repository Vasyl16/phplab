<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/style_for_task4(1).css">
  <title>Task4.2</title>
</head>

<body>
  <div class="block">
    <form name="mainform" action="Yurchuk_task4(2).php" method="POST" enctype="multipart/form-data">
      <input type="file" name="fileForSort">
      <input class="submit" type="submit" value="Вивести список трьох слів, які найчастіше зустрічаються у тексті.">
    </form>
    <?php
    $fileName = $_FILES["fileForSort"]["name"];
    $file = file_get_contents("files/$fileName");
    $filter=0;
    if ($file) {
      $result=explode(' ',$file);
      
      while($filter<=count($result)-1){
        $number = 0;
for($k=0;$k<count($result);$k++){
  if($result[$filter]==$result[$k]){
$number++;

  }
}
if($number>=2){
echo "$result[$filter] : $number ," ;
}
$filter++;

      }
    }
    
    ?>
  </div>
</body>

</html>