<?php
include("ClassConexao.php");
Class ClassCrud extends ClassConexao{

	private $crud;
	private $contador;

	private function preparedStatements($query, $parametros){
		$this->countParametros($parametros);
		$this->crud = $this->conectaDB()->prepare($query);

		for ($i = 1; $i <= $this->contador ; $i++) {
			$this->crud->bindValue($i, $parametros[$i - 1]);
		}
		$this->crud->execute();
	}

	private function countParametros($parametros){
		$this->contador = count($parametros);
	}

	#inserção no banco de dados
	public function insertDB($tabela, $condicao, $parametros){
		$this->preparedStatements("INSERT INTO {$tabela} VALUES ({$condicao})", $parametros);
		return $this->crud;
	}

	#inserção no banco de dados
	public function selectDB($campos,$tabela, $condicao, $parametros){
		$this->preparedStatements("SELECT {$campos} FROM {$tabela} {$condicao}", $parametros);
		return $this->crud;
	}


	

}











