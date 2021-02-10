<?php 
//2 ARRAYS E VAMOS VERIFICAR OS NÚMEROS EM COMUM.

$array = array('Ilton', 'Marcos', 'Ilton', 'Ilton', 'Claudio','Kesley');
$arrayRepetido = array();

// Rodar um loop para verificar os valores repetidos dentro do array
for($i = 0; $i < count($array); $i++){
	$valorAtual = $array[$i];
	if(!isset($arrayRepetido[$valorAtual])){
		$arrayRepetido[$valorAtual] = 0;
	} else {
		# code...
		$arrayRepetido[$valorAtual]++;
	}
 
	foreach ($arrayRepetido as $key => $value) {
		# code...
		echo $key;
		echo $value;
		echo "<hr>";
	}
}




?>