<?php 

	require_once 'classe_recibo_model.php';

	$id = "";

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$recibo_model = new ReciboModel();
	$recibo_model->excluir($id);


	header('Location:consultar.php');
}
?>