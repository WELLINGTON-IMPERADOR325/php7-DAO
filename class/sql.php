<?php
	class sql extends PDO	{
		private $conn;
		public function __construct(){
		$this->conn = new PDO ("mysql:host=localhost;dbname=php7","root","jesus777");
	} 
		private function setParams($statement,$parameters = array()){
		foreach($parameters as $key => $value){
			$this->setParam($statement,$key,$value);
		}
	}
		private function setParam($statement,$key,$value){
		$statement->bindParam($key,$value);
	}
		public function query($rawQuery,$params = array()){
		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($stmt,$params);
		$stmt->execute();
		return $stmt;
	}
		public function select($rawQuery,$params = array()):array { // esta //função retorna um array
		$stmt = $this->query($rawQuery,$params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	}	
}
/* o STATEMENTE vem da classe PDO
no index.php,  na chamada do método 'select', o PHP vai pro 

config.php para que este procure o arquivo Sql.php e 

consequentemente a classe. o construct é  executado, o método 

'setParams' chama 'setParam'.

Durante o aprendizado na Orientação a Objetos, percebemos 

que, às vezes, para executar uma ação, é necessário que 

muitas outras sejam executadas antes, sem percebermos

 o método construtor é executado assim que a classe é 

instanciada. Mas, quando chamamos o método select(), ele usa o método query(). Por isso, este 

segundo método é completamente executado enquanto o 

primeiro ainda está aberto. Logo, o método query() finaliza 

//sua execução antes do select()*/
?>