<?php
if($_FILES['download']['size']>4*1024*1024){
  exit('Розмір файлу перевищує 4 мегабайти');
}
if(move_uploaded_file($_FILES['download']['tmp_name'],__DIR__.'\files\\'.$_FILES['download']['name'])){
  echo"Файл успішно загружено".'<br>';
  echo "Вихідне ім'я файла - " . $_FILES['download']['name'] . '<br>';
  echo "Розмір файла в байтах - " . $_FILES['download']['size'] . '<br>';
  echo "MIME тип файла - " . $_FILES['download']['type'] . '<br>';
  echo "Тимчасовий файл,в якому збережений загружений файл - " . $_FILES['download']['tmp_name'] . '<br>';
}
else{
  echo"Помилка загрузки файла";
}

?>