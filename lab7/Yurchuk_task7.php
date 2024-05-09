<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Style/Yurchuk_style_for_task7.css">
  <title>Task7</title>
</head>

<body>
  <div class="block">
    <form name="main" action="Yurchuk_task7.php" method="POST">
      <label for="surname">Прізвище:</label>
      <input name="surname" type="text" placeholder="Введіть прізвище">
      <label for="name">Ім'я:</label>
      <input name="name" type="text" placeholder="Введіть ім'я">
      <label for="age">Вік:</label>
      <input name="age" type="text" placeholder="Введіть свій вік">
      <label for="email">Електронна адреса</label>
      <input name="email" type="text" placeholder="Введіть email">
      <input class="submit" type="submit" value="ГОТОВО">
    </form>
    <?php
    
    class User
    {
      public $surname;
      public $name;
      public $age;
      public $email;
      
      function __construct($surname='Yurchuk',$name='Petro',$age='18',$email='any@.com')
      {
        $this->surname=$surname;
        $this->name=$name;
        $this->age=$age;
        $this->email=$email;
      }
      function input($surname,$name,$age,$email){
        $this->surname=$surname;
          $this->name = $name;
          $this->age = $age;
          $this->email = $email;

      }
      function getinfo(){
        echo "<hr>";
        echo "Прізвище користувача: ". $this->surname.'<br>';
          echo "Ім'я користувача: " . $this->name . '<br>';
          echo "Вік користувача: " . $this->age . '<br>';
          echo "Електронна адреса користувача: " . $this->email . '<br>';
          echo'<hr>';
      }
    }
if($_POST["surname"]!='' && $_POST["name"]!='' && $_POST["age"]!='' && $_POST["email"]!='')
{
      $surname=$_POST["surname"];
      $name = $_POST["name"];
      $age = $_POST["age"];
      $email = $_POST["email"];
$date=new User();
$date->input($surname,$name,$age,$email);
$date->getinfo();
  }

  else {echo '<p>Заповніть форму повністю</p>';}
  
    ?>
  </div>
</body>

</html>