<?php
require_once 'classe_recibo.php';
require_once 'classe_recibo_model.php';
?>

<?php include "cabecalho.php" ?>

<div class="margem">
	<div class="cabecalho">
		<h2>LISTA DE RECIBOS</h2>
	</div>
	<div class="row">
		<div class="col-100">
			<button id="novo" onclick="window.location.href='adicionar.php'" class="botao">+ Novo Registro</button>
		</div>
	</div>	
	<div class="container">
		<table>
			<thead>
				<tr>
					<th>Nome</th>
					<th>Sexo</th>
					<th>Valor</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$recibo_model = new ReciboModel();
				$recibos = $recibo_model->listar();
				
				/*echo "<pre>";
				print_r($recibos);
				echo "<pre>";*/

				foreach($recibos as $recibo){

				 ?>
				<tr>
					<td><?php echo $recibo->getNome(); ?></td>
					<td><?php echo $recibo->getSexo(); ?></td>
					<td><?php echo $recibo->getValor(); ?></td>
					<td><a href="Edilson_Alterar.php?id=<?php echo $recibo->getIdRecibo(); ?>">Editar</a> | <a href="remover.php?id=<?php echo $recibo->getIdRecibo(); ?>"onClick="return confirm('Você tem certeza?');">Excluir</a></td>
				</tr>
				<?php } ?>
			</tbody>
			<tfoot>
			</tfoot>
		</table>
	</div>
</div>
<?php include "rodape.php" ?>