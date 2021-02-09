<?php 
//2 ARRAYS E VAMOS VERIFICAR OS NÚMEROS EM COMUM.

$array_0 = array(0,1,3,4,6,8, 'Ilton');
$array_1 = array(10,90,23,8,6, 'Ilton');


//Rodar um looping e verificar se existe em um e no outro

$em_comum = [];
for($i = 0; $i < count($array_0); $i++){
	for($j = 0; $j < count($array_1); $j++){
		if($array_0[$i] === $array_1[$j]){
			//numero em comum
			$em_comum[] = $array_0[$i];
		}
	}
}

foreach ($em_comum as  $key => $value) {
	# code...
	echo $value;
	echo "<br>";
}

?>