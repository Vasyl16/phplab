<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="Style/Style_for_task4.css">
  <meta charset="UTF-8">
  <title>Task4</title>
</head>

<body>
  <div class="block">
    <?php
    $data = ['2003-02-21', '22-07-2021', '2002-10-12', '12-12-2012', '2013-10-13', '2004-03-22', '21-10-2020', '2010-11-22', '11-11-2018', '2015-11-17'];
    $pattern = '/(\d{4})\-(\d{2})\-(\d{2})/';
    $patternSecond = '/(\d{2})\-(\d{2})\-(\d{4})/';
    $replacementSecond ='${2}-${1}-${3}';
    $replacement ='${2}-${3}-${1}';
    for ($i = 0; $i < count($data); $i++) {
      
      if (preg_replace($patternSecond, $replacementSecond, $data[$i]) || preg_replace($pattern, $replacement, $data[$i]) )
       {
        echo '<p>'. preg_replace($patternSecond, $replacementSecond, $data[$i]).'| '. preg_replace($pattern, $replacement, $data[$i]).'</p>'  ;
        
      }
    }
    ?>
    
  </div>
</body>

</html>