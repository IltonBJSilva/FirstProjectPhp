<?php 


//Preencher array sem número repetidos.
$arr = [];

for($i = 0; $i < 5; $i++){
	//gerar um numero aleatorio entre 1 e 5
	$arr[$i] = rand(1,20);
	echo $arr[$i];
	echo "<br>";
}

?>