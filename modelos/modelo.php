<?php 
include_once('db.php');
class Modelo {

	protected $primaryKey = "id";
	protected $tabla = "";
	protected $columnas = [];
	protected $BD;
	function __construct() {

		$this->BD = new DB();
	}
	public function get($id) {
		$sql = "SELECT * from {$this->tabla} WHERE id={$id}";
		$this->BD->query($sql);
		$fila = $this->BD->single();
		return $fila;
	}

	public function query($query) {
		$this->BD->query($sql);
		$return = $this->BD->fetch();

	}

	public function create() {
		$res = "";
		$coma = implode(",",$this->columnas);
		foreach ($this->columnas as $col) {	$res=$res.":".$col.",";	}
		$res=trim($res,',');
		$sql = "INSERT INTO {$this->tabla} ($coma) VALUES ({$res})";
		$this->BD->query($sql);
		foreach ($this->columnas as $col) {	$this->BD->bind(':'.$col,$this->$col); }
		$this->BD->execute();
	}

	public function update($id) {
		$ficha = $this->get($id);
		$res = "";
		foreach ($this->columnas as $col) {
			if (!isset($this->$col))
				$this->$col = $ficha[$col];
		}
		foreach ($this->columnas as $col) {
			$res=$res.$col.'=\''.$this->$col.'\',';
		}
		$res=trim($res,',');
		$this->BD->query("UPDATE {$this->tabla} SET {$res} WHERE $this->primaryKey={$id}");
		foreach ($this->columnas as $col) {	$this->BD->bind(':'.$col,$this->$col); }
		$this->BD->execute();
		
	}

	public function getAll() {
		$sql = "SELECT * from ficha";	
		$this->BD->query($sql);
		$filas = $this->BD->resultSet();
		return $filas;	
	}
	public function delete($id) {
		$this->BD->query("DELETE FROM ficha WHERE {$this->primaryKey}={$id}");
		$this->BD->execute();
	}
}

?>