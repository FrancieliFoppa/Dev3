<?php
class DataAccess {

	private static $bdConnectionStatic;
	private $bdConnection;

	public function __construct($hostname, $username, $password, $database){
		
		//realiza a conexao com o BD
		$this->bdConnection = mysql_connect($hostname, $username, $password);

		mysql_set_charset('utf8', $this->bdConnection); 
				
		//seleciona o schema referente ao banco de dados
		if ($this->bdConnection)
    	{
			mysql_select_db($database, $this->bdConnection);
    	}else{
    		error_log("Erro ao acessar base de dados!");
    	}
	}
	
    public static function getInstance(){
    	if (!self::$bdConnectionStatic){
			self::$bdConnectionStatic = new self("sql3.freemysqlhosting.net", "sql374144", "hU1*bK6!", "sql374144");
		}
		
		if( self::$bdConnectionStatic === FALSE ) {  
			error_log('mysql connection error: '.mysql_error()); 
		}
		
    	return self::$bdConnectionStatic;
	} 
	 
	public function closeBDConnection(){
		return mysql_close();
	}
}
?>