<?php 
//2 ARRAYS E VAMOS VERIFICAR OS NÚMEROS EM COMUM.

$array_0 = array(0,1,3,4,6,8);
$array_1 = array(10,90,23,8,6);


//Rodar um looping e verificar se existe em um e no outro

$contador = 0;
for($i = 0; $i < count($array_0); $i++){
	for($j = 0; $j < count($array_1); $j++){
		$contador++;
		echo $contador;
		echo "<br>";
	}
}

?>