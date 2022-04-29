<?php 
require_once 'classe_conexao.php';
require_once 'classe_usuario.php';
Class UsuarioModel{
	public function validaUsuario(Usuario $usuario){
		$pdo = new ConexaoBD();
		$conexao = $pdo->conectarBD();

		$stmt = $conexao->prepare("SELECT * FROM usuarios WHERE usuario=? AND senha=?");
		if ($stmt->execute([$usuario->getUsuario(), $usuario->getSenha()])){
			return $stmt->rowCount();
		}
			return 0;
	}
}

?>