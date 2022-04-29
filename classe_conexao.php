<?php 

Class ConexaoBD{
	public function conectarBD(){
		$pdo = new PDO('mysql:host=localhost;dbname=sistemaphp;charset=utf8', 'root', '');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
}
?>