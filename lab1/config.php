<?php
$config['charset'] = 'utf-8';
$config['default_lng'] = 'ua';
//$config_host_name = $config['host_name'];


$LastModified_unix = strtotime(date("D, d M Y H:i:s", filectime($_SERVER['SCRIPT_FILENAME'])));
$LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix);
echo "Last modified: $LastModified" . "<br>";

?>
<html>

<head>
  <meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
  <link rel='stylesheet' href='lab1/StyleCSS/style.css' type='text/css' media='screen, projection' />
  <script type='text/javascript' src='lab1/JS/jquery-3.6.0.min.js'></script>
  <script type='text/javascript' src='lab1/JS/my.js'></script>

</head>
<?php
?>