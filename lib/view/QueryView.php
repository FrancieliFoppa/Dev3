<?php
class QueryView{

	private $queryResult = null;
	
	//construct the site with error
	public function __construct($queryResult = null){	
		$this->queryResult = $queryResult;
	}	
	
	public function getTemplate() {
		die("Tarefa n&atilde; dispon&iacute;vel!");
	}
	
	public function show(){
		die("Tarefa n&atilde; dispon&iacute;vel!");
	}
	
	public function getContent(){
		if($this->queryResult == null){
			die("Requested a null query.");
		}
		return $this->queryResult;
	}

}

?>
