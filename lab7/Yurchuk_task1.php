<?php
require"../config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/Yurchuk_style_for_task1.css">
  <title>Task1</title>
</head>
<body>
  <div class="block">
    <?php 
    class Student{
      public $name;
      public $surname;
      public $group;
    }
    $student_first=new Student();
    $student_second = new Student();
    $student_third = new Student();
    $student_first->name="Vasya";$student_first->surname="Karpenko";$student_first->group="IPZ-21";
    $student_second->name = "Nazarii";$student_second->surname = "Shpak";$student_second->group = "IPZ-31";
    $student_third->name = "Andriy";$student_third->surname = "Pupkin";$student_third->group = "IPZ-11";

print_r($student_first);echo'<br>';
    print_r($student_second);echo'<br>';
      print_r($student_third);

    
    ?>
  </div>
</body>
</html>