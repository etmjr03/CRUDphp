<?php 
Class Usuario{
	private $id_usuario;
	private $usuario;
	private $senha;

	public function getIdUsuario(){
		return $this->id_usuario;
	}

	public function setIdUsuario($id_usuario){
		$this->id_usuario = $id_usuario;
	}
	
	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}
}

?>