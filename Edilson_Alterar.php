<?php 

	require_once 'classe_recibo.php';
	require_once 'classe_recibo_model.php';

if (isset($_POST['Edilson_Alterar'])){

	$recibo = new Recibo();

	$recibo->setIdRecibo($_POST['id']);
	$recibo->setNome(mb_strtoupper($_POST['nome']));
	$recibo->setSexo(mb_strtoupper($_POST['sexo']));
	$recibo->setValor($_POST['valor']);

	$recibo_model = new ReciboModel();
	$recibo_model->editar($recibo);	

	header('Location:consultar.php');
} else {

if(isset($_GET['id'])){
	$id = $_GET['id'];

	$recibo = new Recibo();
	$recibo_model = new ReciboModel();
	$recibo = $recibo_model->pesquisarId($id);

	}
}

?>

<?php include "cabecalho.php"?>
	<div class="margem">
		<div class="cabecalho">
			<h2>EMISSOR DE RECIBOS</h2>
		</div>
		<div class="container">
			<form action="Edilson_Alterar.php" method="post">
				<input type="hidden" id="id" name="id" required="true" value = "<?php echo $recibo->getIdRecibo(); ?>">
				<div class="row">
					<div class="col-25">
						<label for="nome">Nome</label>
					</div>
					<div class="col-70">
						<input type="text" id="nome" name="nome" required="true" value = "<?php echo $recibo->getNome(); ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label>Sexo</label>
					</div>
					<div class="col-75 boxBackground">
						<input type="radio" id="masculino" name="sexo" value="M" <?php echo $recibo->getSexo() == "M"?"checked":""; ?> required="true">
						<label for="masculino">Masculino</label><br>
						<input type="radio" id="feminino" name="sexo" value="F" <?php echo $recibo->getSexo() == "F"?"checked":""; ?>>
						<label for="feminino">Feminino</label><br>
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="valor">Valor</label>
					</div>
					<div class="col-70">
						<input type="text" id="valor" name="valor" required="true" value = "<?php echo $recibo->getValor(); ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-100">
						<input type="submit" value="Alterar" name="Edilson_Alterar">
					</div>
				</div>
			</form>
		</div>
	</div>
<?php include "rodape.php"?>