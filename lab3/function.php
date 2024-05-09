<?php
require "../config.php";
function create_table2($data, $border=1, $cellpadding=4, $cellspacing=4)
{
	echo "<table border=$border  cellpadding=$cellpadding cellspacing=$cellspacing>\n";
	reset($data); // вказуємо початок
	$value=current($data);
	while($value)
	{
		echo "<tr><td>$value</td></tr>\n";
		$value = next($data);
	}
	echo '</table>';
	echo 'Кількість параметрів: ';
	echo func_num_args().'<br/>';
	$args = func_get_args();
	foreach ($args as $arg)
		echo $arg.'<br/>';
}
$my_array = array('Рядок 1', 'Рядок 2','Рядок 3');
//create_table2($my_array,3,8,8);

function output($array){
foreach($array as $counter=>$value){

	echo' index : ' .$counter+1 . ' value : ' . $value . '<br> <br>';
}

}
function output_matrix($array){
	$ar=[];
	
for($i=0;$i<7;$i++){
	for($k=0;$k<7;$k++){
	$array[$i][$k]=mt_rand(1,100);
		echo  $array[$i][$k] . '  | ';

	}
	echo '<br>';

}
echo '<br>';

for($i=0;$i<7;$i++){
echo 'Min value of row '.$i+1 . ' : '. min($array[$i]) . ' <br>';	
}

echo '<br>';
	
for($i=0;$i<7;$i++){
$ar=$array[$i][6];
echo ' Value of last column : ' . $ar . '<br>';
}
}

function echo_fun(){
	$number=$_GET['formvariable'];
	$array=[];
	for($i=0;$i<$number;$i++){
		$array[$i]=mt_rand(1,50)*2;
		echo 'Index = '. $i+1 . ' Value = '. $array[$i]. '<br>'; 
	}

}
