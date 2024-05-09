<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/Yurchuk_style_for_task1.css">
  <title>Task4</title>
</head>

<body>
  <div class="block">
    <?php
    class Student
    {
      public $name;
      public $surname;
      public $group;
      function __construct($name = "Petya", $surname = "Pupkin", $group = "IPZ-11")
      {
        $this->name = $name;
        $this->surname = $surname;
        $this->group = $group;
      }
      function __clone()
      {
        $this->name = 'Petro';
        $this->surname = 'Yurchuk';
        $this->group = 'IPZ-41';
      }
      function getinfo()
      {
        echo "Ім'я студента: " . $this->name . '<br>';
        echo "Прізвище студента: " . $this->surname . '<br>';
        echo "Назва групи студента: " . $this->group . '<br>';
        echo "<hr>";
      }
      
    }
    $student_first = new Student();
    $student_second = new Student();
    $student_third = new Student();
    $student_fourth = new Student("Vasya", "Karpenko", "IPZ-21");
    $student_fifth = new Student("Peter", "Smith", "IPZ-11");
    $student_sixth = new Student("John", "Snow", "IPZ-31");
    $studen_seventh=clone $student_sixth;
print_r($studen_seventh);
echo'<br>';
    $student_first->getinfo();
      $student_second->getinfo();
        $student_third->getinfo();
          $student_fourth->getinfo();
            $student_fifth->getinfo();
              $student_sixth->getinfo();







    ?>
  </div>
</body>