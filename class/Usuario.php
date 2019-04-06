<?php
class Usuario {	// exe DAO SELECT, fazendo a classe sql se cuminicar com a classe usuario
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;
	
	public function getIdusuario(){
	// GET pega dados do id usuario la do banco e faz leitura
	return $this->idusuario;
	}
	public function setIdusuario($value){
	 // SET confirma os dados e altera pelos parĂ¢metros
		$this->idusuario = $value;	
	}
	
	public function getDeslogin(){
	return $this->deslogin;
	}
	public function setDeslogin($value){
		$this->deslogin = $value;	
	}
	
	
	public function getDessenha(){
	return $this->dessenha;
	}
	public function setDessenha($value){
		$this->dessenha = $value;	
	}
	
	public function getDtcadastro(){
	return $this->dtcadastro;
	}
	public function setDtcadastro($value){
		$this->dtcadastro = $value;	
	} 
	public function loadById($id){
	 // carregando id do banco de dados que é a chave primarey key
		$sql = new sql();
		$results = $sql->select("SELECT* FROM tb_usuarios WHERE idusuario = :ID", array( ":ID"=> $id
		));
		//if(isset($results[0])) validando o id que e um array de array ovendo se ele existe com "isset" outra maneira logo abaixo
		if(count($results)> 0) 	{ 
		// results 0 porque ele é um array de array
			
		$row = $results[0];

		$this->setIdusuario($row['idusuario']);	
		$this->setDeslogin($row['deslogin']);	
		$this->setDessenha($row['dessenha']);	
		$this->setDtcadastro(New DateTime($row['dtcadastro']));	
		}
		
	}
	
	public static function getlist(){ // vantagem de ser stastic é que não precisa, instaciar o objeto é só chamar direto no index! aqui lista todos os usuarios
		$sql = new sql();
		return $sql->select("SELECT* FROM tb_usuarios ORDER BY deslogin");
	}
	
	public static function search($login){ // aqui está a função ela faz uma busca de usuarios apartir de duas string veja no index!
	$sql = new sql();	
	return $sql->select("SELECT* FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin",array(':SEARCH'=>"%".$login."%"
	));
	}
	
	public function login($login,$password){ //aqui será imprimido na tela o usuario, o qual o index vai solicitar  o login e a senha!
		$sql = new sql();
		$results = $sql->select("SELECT* FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array( ":LOGIN"=>$login,
		":PASSWORD"=>$password
		));
		//
		if(count($results)> 0) 	{ 
		$row = $results[0];

		$this->setIdusuario($row['idusuario']);	
		$this->setDeslogin($row['deslogin']);	
		$this->setDessenha($row['dessenha']);	
		$this->setDtcadastro(New DateTime($row['dtcadastro']));	
		} 
		else {
			throw new Exception("Login/ou senha inválida.");
		}
		
	}
	
	public function __toString(){
		// metodo magico __toString em vez de mostrar a estrutura do objeto ele  executa oque tem dentro! dando echo em json enconde
	return json_encode(array( // vai  dar echo em array dos objetos
		"idusuario"=>$this->getIdusuario(),
		"deslogin"=>$this->getDeslogin(),
		"dessenha"=>$this->getDessenha(),
		"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		));
	}
	
 }
?>