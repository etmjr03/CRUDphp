<?php 
require_once 'classe_conexao.php';
require_once 'classe_recibo.php';
Class ReciboModel{
	public function listar(){
		$pdo = new ConexaoBD();
		$conexao = $pdo->conectarBD();

		$stmt = $conexao->prepare("SELECT * FROM recibos");

		if ($stmt->execute()){
			$rs = $stmt->fetchALL(PDO::FETCH_CLASS, 'Recibo');
			return $rs;
		}
			return 0;
	}

	public function inserir(Recibo $recibo){
		$pdo = new ConexaoBD();
		$conexao = $pdo->conectarBD();

		$stmt = $conexao->prepare("INSERT INTO recibos (nome, sexo, valor) VALUES(?, ?, ?)");

		if ($stmt->execute([$recibo->getNome(), $recibo->getSexo(), $recibo->getValor()])){
			return $stmt->rowCount();
		}
			return 0;
	}

	public function pesquisarId($id){
		$pdo = new ConexaoBD();
		$conexao = $pdo->conectarBD();

		$stmt = $conexao->prepare("SELECT * FROM recibos WHERE id_recibo = $id");

		if ($stmt->execute([$id])){
			$rs = $stmt->fetchObject('Recibo');
			return $rs;
		}
			return null;
	}

	public function editar(Recibo $recibo){
		$pdo = new ConexaoBD();
		$conexao = $pdo->conectarBD();

		$stmt = $conexao->prepare("UPDATE recibos SET nome = ?, sexo = ?, valor = ? WHERE id_recibo = ?");

		if ($stmt->execute([$recibo->getNome(), $recibo->getSexo(), $recibo->getValor(), $recibo->getIdRecibo()])){
			return $stmt->rowCount();
		}
			return 0;
	}

	public function excluir($id){
		$pdo = new ConexaoBD();
		$conexao = $pdo->conectarBD();

		$stmt = $conexao->prepare("DELETE FROM recibos WHERE id_recibo = ?");

		if ($stmt->execute([$id])){
			return true;
		}
			return false;
	}
}

?>