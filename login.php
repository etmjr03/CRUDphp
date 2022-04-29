<?php 
if (isset($_POST['logar'])){
	require_once 'classe_usuario.php';
	require_once 'classe_usuario_model.php';

	session_start();
	$usuario = new Usuario();

	$usuario->setUsuario($_POST['usuario']);
	$usuario->setSenha($_POST['senha']);

	$usuarioModel = new UsuarioModel();

	$login = $usuarioModel->validaUsuario($usuario);
	
if ($login == 1){
		$_SESSION['logado'] = true;
	header('Location:consultar.php');
} else {
	echo "Usuário ou Senha inválidos";
}
}

?>

<!DOCTYPE php>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Emissor de Recibos</title>
	<style> 
{

	box-sizing: border-box;
}

body {
	background-color: #696969; 
}

input[type=text], select, textarea {
	width: 100%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	resize: vertical;
}

label {
	padding: 12px 12px 12px 0;
	display: inline-block;
}

input[type=submit] {
	background-color: #4CAF50;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	width: 150px;
}

input[type=submit]:hover {
	background-color: #45a049;
}

p {
	margin: 0;
	text-indent: 6ch;
}

table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table td, table th {
  padding: 8px;
}

table tr:nth-child(even){background-color: #eee;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #777;
  color: white;
}

.botao {
	font-family: Arial, Helvetica, sans-serif;
	background-color: #777;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	width: 150px;
}

.container {
	border-radius: 5px;	
	padding: 10px;
	margin: 50px;
}

.col-25 {
	float: left;
	width: 25%;
	margin-top: 6px;
}

.col-50 {
	float: left;
	width: 50%;
	margin-top: 6px;
	text-align: center;
}

.col-75 {
	float: left;
	width: 75%;
	margin-top: 6px;
}

.col-100 {
	float: left;
	width: 100%;
	margin-top: 12px;
	text-align: center;
}

.row:after {
	content: "";
	display: table;
	clear: both;
}

.margem{
	margin: 50px;
	padding: 20px;
	border-radius: 20px;
	background-color: #fff;
}

.cabecalho{
	text-align: center;
	margin-top: 20px;
}

.rodape{
	text-align: right;
	padding: 20px;
}

.boxBackground{
	border: 1px solid #ccc;
	padding-left: 20px;
	border-radius: 4px;
}

@media screen and (max-width: 600px) {
	.col-25, .col-75, input[type=submit] {
		width: 100%;
		margin-top: 0;
	}
}
	
	</style>
</head>
<body>

	<div class="margem">
		<div class="cabecalho">
			<h2>EMISSOR DE RECIBOS</h2>
		</div>
		<div class="container">
			<form action="login.php" method="POST">
				<div class="row">
					<div class="col-25">
						<label for="usuario">Usuário</label>
					</div>
					<div class="col-70">
						<input type="text" id="usuario" name="usuario" required="true">
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="senha">Senha</label>
					</div>
					<div class="col-70">
						<input type="text" id="senha" name="senha" required="true">
					</div>
				</div>
				<div class="row">
					<div class="col-100">
						<input type="submit" value="login" name="logar">
					</div>
				</div>
			</form>
		</div>
	</div>
<?php include "rodape.php"?>