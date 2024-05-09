<?php 
$number=mt_rand(1,6);
include "task$number.php ";
switch($number){
case 1: echo  '<br> '.'Викликати функцію func1';
break;
case 2: echo '<br>' . 'Викликати функцію func2';
    break;
    case 3: echo '<br>' . 'Викликати функцію func3';
break;
case 4: echo '<br>'.'Викликати функцію func4';
break;
case 5: echo '<br> '.'Викликати функцію func5';
break;
case 6: echo '<br>'.'Викликати функцію func6';
break;
default: echo '<br>'.'Некоректні дані';
break;

}
