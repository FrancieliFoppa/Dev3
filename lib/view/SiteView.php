<?php

class SiteView{

	protected $action = null;
	protected $error = null;
	protected $nextAction = null;
	
	//construct the site with error
	public function __construct($action = null, $error = null, $nextAction = null){	
		$this->action = $action;
		$this->nextAction = $nextAction;
		$this->error = $error;
	}	
	
	public function getTemplate() {
		$output ="P&aacute;gina n&atilde;o dispon&iacute;vel.";
		return $output;
	}
	
	public function show(){
		$output = $this->getTemplate();
		return $output;
	}
	
	public function getContent(){
		$result["text"] = $this->getTemplate();				
		
		if($this->error != null){
			$result["error"] = $this->error;
		}else{
			$result["error"] = "";
		}

		if($this->nextAction != null){
			$result["nextAction"] = $this->nextAction;
		}else{
			$result["nextAction"] = "";
		}

		return json_encode($result);	
	}

}

?>
