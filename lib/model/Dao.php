<?php

/*
 * Classe que efetua a leitura e escrita de tabelas na base de dados
 * deve ser estendida para ser usada com uma tabela especifica.
 * 
 */
abstract class Dao {
	
	//classe do DTO a ser referenciada pela DAO no find e findAll 
	protected $class;
	//a tabela para realizar insert, update, delete, find e findAll
	protected $table;
	
	public function __construct($table, $class) {
		$this->table = $table;
		$this->class = $class;
	}
	
	/*
	 * Efetua uma query mysql fazendo controle de erro. Caso
	 * um erro seja detectado ao utilizar a base de dados
	 * log esses resultados no local apropriado.
	 * 
	 * @return o mesmo resource retornado por mysql_query ou false
	 * caso aconteca um erro.
	 */
	private function mysqlSafeQuery($query){		
		$result = mysql_query($query);
		
		if(!$result){		
			error_log("Error processing query '".$query."'");	
			error_log(mysql_error());
		}
		
		return $result;
	}
	
	//funcao para setar corretamente valores nulos e datas
	//com o valor NOW() para as funcoes de sql
	//está função é SQL injection safe
	protected function arrumaCampo($value, $separador = ",") {
		//valores nulos
		if($value == null)
			return "null " . $separador . " ";
		
		//valores para datas
		if($value == "NOW()")
			return $value . " " . $separador . " ";

		//valores para nulos
		if($value == "NULL")
			return $value . " " . $separador . " ";
			
		//valores para senhas
		if(strpos($value, "MD5(") !== false){
			return "MD5('" . substr($value, 4, strlen($value)-1) . "') " . $separador;
		}
		
		return "'" . mysql_real_escape_string($value) . "' " . $separador . " ";
	}
	
	//funcao para insercao de um registro na base
	public function insert($dto) {
		$dtoAttributes = $dto->getAttributes();
		$query = "INSERT INTO " . $this->table;
		$columns = " (";
		$values = " VALUES(";
		
		foreach($dtoAttributes as $key => $value) {
			//para a insercao desconsidero o campo id
			if("id" != $key) {
				$columns .= "`".$key . "`, ";
				$values .= $this->arrumaCampo($value);
			}
		}
		
		//retira a ultima ", " das strings
		$columns = substr($columns, 0, strlen($columns)-2) . ")";
		$values = substr($values, 0, strlen($values)-2) . ")";
		
		$query .= $columns . $values . ";";

		$result = $this->mysqlSafeQuery($query);

		if($result){
			return mysql_insert_id();
		}else {
			return -1;
		}		
	}
	
	//funcao para update de um registro da base
	public function update($dto, $id) {
		$dtoAttributes = $dto->getAttributes();
		$query = "UPDATE " . $this->table . " SET ";
		$where = " WHERE ";
		
		foreach($dtoAttributes as $key => $value) {
			//para o update o id vai na clausula do where
			if($id == $key){
				$where .= $key . " = '" . $value . "'";
			}else {
				if($value != null){ //&& $value != ""
					$query .= $key . " = " . $this->arrumaCampo($value);
				}
			}
		}
		
		//retira a ultima ", " das strings
		$query = substr($query, 0, strlen($query)-2);
		
		$query .= $where;

		$result = $this->mysqlSafeQuery($query);
		if($result){
			return $dto->getId();
		}else {
			error_log(mysql_error());
			error_log("Voce provavelmente nao tem permissao para update na table.");
		}		
		return -1;
	}
	
	//funcao para deletar um registro da base
	public function delete($dto) {
		$dtoAttributes = $dto->getAttributes();
		$query = "DELETE FROM " . $this->table . " WHERE ";
		
		foreach($dtoAttributes as $key => $value) {
			//para o delete o id vai na clausula do where
			if("id" == $key) {
				$query .= $key . " = " . $this->arrumaCampo($value);
				break;
			}
		}
		
		//remove a ultima , adicionada
		$query = substr($query, 0, strlen($query)-3);
		
		$this->mysqlSafeQuery($query);
	}
	
	//funcao para deletar um registro da base, baseando-se nos atributos especificados
	public function deleteByAttributes($dto) {
		$dtoAttributes = $dto->getAttributes();
		$query = "DELETE FROM " . $this->table . " WHERE ";
		
		foreach($dtoAttributes as $key => $value) {
			if($value != null)
				$query .= $key . " = " . $this->arrumaCampo($value, "AND");
		}
		
		//remove o ultimo AND adicionado
		$query = substr($query, 0, strlen($query)-4);
		
		$this->mysqlSafeQuery($query);
	}
	
	//funcao para encontrar todos os registros da tabela
	public function findAll($limit = null, $offset = -1, $orderFields = null, $orderType = null, $ignoreAdmin = null) {
		$query = "SELECT * FROM " . $this->table;

		if($ignoreAdmin != null) {
			$query .= " WHERE id != 1 and activated = 1";
		}
		
		if($orderFields != null) {
			$query .= " ORDER BY ";
			foreach($orderFields as $field) {
				$query .= $field . ", ";
			}
			$query = substr($query, 0, strlen($query)-2);
			
			if($orderType != null) {
				$query .= " " . $orderType;
			}
		}
		
		if($limit != null && $offset >= 0) {
			$query .= " LIMIT " . $offset . ", " . $limit;
		}
		else {
			if($limit != null)
				$query .= " LIMIT " . $limit;
		}

		$sqlResult = $this->mysqlSafeQuery($query);
		
		$i = 0;
		$itens = null;
		while($item = mysql_fetch_array($sqlResult)) {
			$itens[$i++] = new $this->class($item);
		}
		
		return $itens;
	}
	
	//funcao para encontrar um registro atraves de propriedades especificas
	public function findByAttributes($dto){
		$dtoAttributes = $dto->getAttributes();
		$query = "SELECT * FROM " . $this->table . " WHERE ";
		
		foreach($dtoAttributes as $key => $value){
			if($value != null && $value != ""){
				$query .= $key . " = " . $this->arrumaCampo($value, "AND");
			}
		}
		
		//remove o ultimo AND adicionado
		$query = substr($query, 0, strlen($query)-4);
		
		$sqlResult = $this->mysqlSafeQuery($query);
		
		if(!$sqlResult){
			error_log('Invalid query :"'.$query.'", '.mysql_error());
			die("Invalid query, see log for more information");
		}
		
		$classe = null;
		if($item = mysql_fetch_array($sqlResult)) {
			$classe = new $this->class($item);
		}
		return $classe;
	}
	
	//funcao para encontrar diversos registros atraves de propriedades especificas
	public function findAllByAttributes($dto, $limit = null, $offset = -1, $orderFields = null, $orderType = null){
		$dtoAttributes = $dto->getAttributes();
		$query = "SELECT * FROM " . $this->table . " WHERE ";
		
		foreach($dtoAttributes as $key => $value){
			if($value != null && $value != "")
				$query .= $key . " = " . $this->arrumaCampo($value, "AND");
		}
		
		//remove o ultimo AND adicionado
		$query = substr($query, 0, strlen($query)-4);
		
		if($orderFields != null) {
			$query .= " ORDER BY ";
			foreach($orderFields as $field) {
				$query .= $field . ", ";
			}
			$query = substr($query, 0, strlen($query)-2);
			
			if($orderType != null) {
				$query .= " " . $orderType;
			}
		}
		
		if($limit != null && $offset >= 0) {
			$query .= " LIMIT " . $offset . ", " . $limit;
		}
		else {
			if($limit != null)
				$query .= " LIMIT " . $limit;
		}
		
		$sqlResult = $this->mysqlSafeQuery($query);
		
		$cont = 0;
		$vetor = null;
		while($item = mysql_fetch_array($sqlResult)) {
			$vetor[$cont++] = new $this->class($item);
		}
		
		return $vetor;
	}
	
}

?>