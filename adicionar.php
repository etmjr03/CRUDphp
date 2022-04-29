<?php 
if (isset($_POST['adicionar'])){

	require_once 'classe_recibo.php';
	require_once 'classe_recibo_model.php';

	$recibo = new Recibo();
	$recibo->setNome(mb_strtoupper($_POST['nome']));
	$recibo->setSexo(mb_strtoupper($_POST['sexo']));
	$recibo->setValor($_POST['valor']);

	$recibo_model = new ReciboModel();
	$recibo_model->inserir($recibo);	

	header('Location:consultar.php');
}
?>

<?php include "cabecalho.php"?>
	<div class="margem">
		<div class="cabecalho">
			<h2>EMISSOR DE RECIBOS</h2>
		</div>
		<div class="container">
			<form action="adicionar.php" method="post">
				<div class="row">
					<div class="col-25">
						<label for="nome">Nome</label>
					</div>
					<div class="col-70">
						<input type="text" id="nome" name="nome" required="true">
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label>Sexo</label>
					</div>
					<div class="col-75 boxBackground">
						<input type="radio" id="masculino" name="sexo" value="M" required="true">
						<label for="masculino">Masculino</label><br>
						<input type="radio" id="feminino" name="sexo" value="F">
						<label for="feminino">Feminino</label><br>
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="valor">Valor</label>
					</div>
					<div class="col-70">
						<input type="text" id="valor" name="valor" required="true">
					</div>
				</div>
				<div class="row">
					<div class="col-100">
						<input type="submit" value="adicionar" name="adicionar">
					</div>
				</div>
			</form>
		</div>
	</div>
<?php include "rodape.php"?>