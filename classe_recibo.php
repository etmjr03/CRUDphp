<?php 
Class Recibo{
	private $id_recibo;
	private $nome;
	private $sexo;
	private $valor;

	public function getIdRecibo(){
		return $this->id_recibo;
	}

	public function setIdRecibo($id_recibo){
		$this->id_recibo = $id_recibo;
	}
	
	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function getValor(){
		return $this->valor;
	}

	public function setValor($valor){
		$this->valor = $valor;
	}
}

?>