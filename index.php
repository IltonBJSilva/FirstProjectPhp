<?php 


//Preencher array sem número repetidos.
$arr = [];

for($i = 0; $i < 2; $i++){
	//gerar um numero aleatorio entre 1 e 5
	$arr[$i] = rand(1,2);
	//Em quanto existir no meu array o %arr no indice $i e o ar novamente
	while (inArrayCustom($i,$arr[$i], $arr)) {
		# code...
		$arr[$i] = rand(1,5);

	}
}

print_r($arr);
	function inArrayCustom($indice, $valor, $arr){
		for($i = 0; $i < count($arr); $i++){
			if($arr[$i] == $valor && $i != $indice){
				return true;
			}
	
		}

		return false;

	} 

?>