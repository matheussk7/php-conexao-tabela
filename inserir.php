<?php

include 'conexao.php';


try{

$data = $_POST['data'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];
$volume = $_POST['volume'];
	
$incluir= $conexao->query("INSERT INTO tabela (data,quantidade,valor,volume)values('$data','$quantidade','$valor','$volume')");


}catch(PDOException $e){
		echo $e->getMessage();
	}
	
?>
<!-- Matheus Henrique -->