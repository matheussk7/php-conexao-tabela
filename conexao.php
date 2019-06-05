<?php

try{

// Primeiro cria uma variavel conexão que instancia o caminho, o usuario a senha e o nome do banco de dados
	/* modo antigo
	$caminho = 'localhost';
	$user = 'root';
	$pass = '';
	$bd = 'nome do banco';

	$conexao = mysqli_connect($caminho ,$user,$pass,$bd);
	*/
	$conexao = new PDO('mysql:host=localhost;dbname=pillon;charset=utf8','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'));
$conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// caso tenha erro grava na variavel e para mostrar o erro esse modo e parecido com o SQLException
}catch (PDOException $e) {
	
	echo 'Erro na conexão:'.$e->getMessage().'<br>';
	echo 'Codigo do erro:'.$e->getCode();
	
}
?>
<!-- Matheus Henrique -->