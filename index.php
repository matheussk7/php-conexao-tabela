<?php
session_start();
include 'conexao.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Buscar tabela</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>


<h1 class="text-center"> Buscar Tabelas </h1>

<form class="container form" action="inserir.php" method="post">
<div class="form-group">
	<label> Data </label>
	<input type="text" class="form-control" id="data" placeholder="dd/mm/aaaa" name="data">

</div>

<div class="form-group">
				
				<label>Quantidade</label>
				<input type="text" id="quantidade" class="form-control" placeholder="Digite a Quantidade" name="quantidade">

			</div>
			<div>
				<label> Valor </label>

				<input type="text" id="valor" class="form-control" name="valor">

			</div>

			<div>
				<label> Volume </label>

				<input type="text" id="volume" class="form-control" name="volume">

			</div>
			
			<div style="padding-top: 10px;">
				<button type="submit" class="btn btn-primary" value="submit" name="submit" onclick="//function(){ alert('Inserido com sucesso');}">Incluir</button>
			
			</div>

			<!-- 
				<button type="submit" class="btn btn-primary">Apagar</button>
			
			</div> -->

		</form><!-- final do form-->

		<form action="" method="post">

			<div style="padding-top: 10px;" class="" align="center">
				<button type="submit" class="btn btn-primary" > Mostrar </button>
			
		<div class="container" style="padding-top: 10px;">
		<table class="table table-bordered">
			<thead>
				
				<tr>

					<th scope="col">Data</th>
					<th scope="col">Quantidade</th>
					<th scope="col">Valor</th>
					<th scope="col">Volume</th>

					

				</tr>
					<?php

	
	$consulta = $conexao ->query('select * from tabela');
	$consulta->execute();
	
	while($exibe = $consulta-> fetch (PDO::FETCH_ASSOC)){
		
		
					?>
				<tr>
					<th><?php echo $exibe['data']?> </th>

					

					<td><?php echo $exibe['quantidade']?> </td>
					
					
					
					<td><?php echo $exibe['valor']?> </td>
					
					
					
					<td><?php echo $exibe['volume']?></td>
				</tr>
			<?php } ?>
				
			</thead>

			<tbody>

				<tr>
					
					<!--<th scope="col">Teste Data</th>
					<th scope="col">Teste Quantidade</th>
					<th scope="col">Teste Valor</th>
					<th scope="col">Teste Volume</th> -->

				</tr>



			</tbody>
		</table>
</div>
</form>


</body>
</html>