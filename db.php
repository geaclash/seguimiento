<?php
class DB {

	private $DB_host = "localhost";
	private $DB_user = "root";
	private $DB_pass = "";
	private $DB_name = "seguimiento";
	private $DB_type = "mysql";
	private $DB_file = "db.db";
	private $stmt;
	public $BD;

	
	function __construct() {


		try {
			switch ($this->DB_type) {
				case ("mysql"):
					$this->BD = new PDO("mysql:host={$this->DB_host};dbname={$this->DB_name}",$this->DB_user,$this->DB_pass);
					break;
				case ("sqlite"):
					$this->BD = new PDO("sqlite:".'db/db.db');
	 		}
			$this->BD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
	 		echo $e->getMessage();
		}
	}

	function query($query) {
		$this->stmt = $this->BD->prepare($query);
	}

	public function bind($param, $value, $type = null){
 		if (is_null($type)) {
	  		switch (true) {
	    		case is_int($value):
	    	  		$type = PDO::PARAM_INT;
	      			break;
	    		case is_bool($value):
	      			$type = PDO::PARAM_BOOL;
	      			break;
	    		case is_null($value):
	      			$type = PDO::PARAM_NULL;
	      			break;
	    		default:
	      			$type = PDO::PARAM_STR;

			
  			}
		}
	$this->stmt->bindValue($param, $value, $type);
	}


	public function execute(){
    	return $this->stmt->execute();
    }

    public function resultset(){
    	$this->execute();
    	return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	public function single(){
    	$this->execute();
    	return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}
	public function rowCount(){
    	return $this->stmt->rowCount();
	}

	public function lastInsertId(){
    	return $this->BD->lastInsertId();
	}

	public function beginTransaction(){
    	return $this->BD->beginTransaction();
	}

	public function endTransaction(){
    	return $this->BD->commit();
	}

	public function cancelTransaction(){
    	return $this->BD->rollBack();
	}
	public function debugDumpParams(){
    	return $this->stmt->debugDumpParams();
	}

	function getDBName() {
		return $this->DB_name;
	}
}
?>