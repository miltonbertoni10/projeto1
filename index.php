

<?php 
	include("Includes/header.php");
	include("Class/ClassCrud.php");
?>

<div class="container">
	<h1>Aprendendo PHP OO</h1>

	<div class="resultado"></div>

	<form id="FormCadastro" name="FormCadastro" action="Controller/ControllerCadastro" method="post" accept-charset="utf-8">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" >
		<label for="sexo">Sexo:</label>
		<input type="text" name="sexo" >
		<label for="cidade">Cidade:</label>
		<input type="text" name="cidade" >
		<button type="submit">Enviar</button>
	</form>

	<div class="table">
		<table>
			<caption>cadastro</caption>
			<thead>
				<tr>
					<th>Nome</th>
					<th>Sexo</th>
					<th>Cidade</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$consulta = new ClassCrud();
				$Bfetch = $consulta->selectDB("*","cadastro","",array());

				while ($fetch = $Bfetch->fetch(PDO::FETCH_ASSOC)) 
					{ ?>

						<tr>
							<td><?php echo $fetch['Nome']; ?></td>
							<td><?php echo $fetch['Sexo']; ?></td>
							<td><?php echo $fetch['Cidade']; ?></td>
							<td>
								<a href="visualizar.php">Visualizar</a>
								<a href="editar.php">Editar</a>
								<a href="excluir.php">Excluir</a>
							</td>
						</tr>
						    
					<?php 
					}?>
				
				
			</tbody>
		</table>
	</div>
</div>

<?php 
	include("Includes/footer.php");
?>