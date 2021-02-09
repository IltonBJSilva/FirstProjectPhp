 <?php 
//Codigo PHP!

//1) Verificar se tem mais de 5 letra
//2) Se é numero
//3) Se possui o @
//isset = Verificar se existe = Variavel de valor ou ser criada.

if(isset($_POST['acao'])){
	$nome = $_POST['nome'];
	$numero = $_POST['numero'];
	$email = $_POST['email'];

	//Verifica se o nome tme mais de 5 letras;
	if(strlen($nome) >= 5){
		echo "Nosso nome tem mais ou igual 5 letras: ", $nome;
		echo "<br>";
	}

	if(is_numeric($numero)){
		echo "É numero: ", $numero;
		echo "<br>";

	}

	//primeiro valor e oque quero verificar haystack e  osegundo e onde, ou seja, na variavel email
	if(strstr($email, '@') != ''){
		echo "É um email valido: ",$email;
		echo "<br>";

	}
	
}




 ?>

<form method="post">
	<a>Nome:</a>
	<input type="text" name="nome">
	<br>
	<a>numero:</a>
	<input type="text" name="numero">
	<br>
	<a>email:</a>
	<input type="text" name="email">
	<br>	<br>

	<a>acao: </a>
	<input type="submit" name="acao">
</form>