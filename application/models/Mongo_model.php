<?php

class Mongo_model extends CI_Model {
	private $conn;
	private $database = "foro";
	public function __construct(){
		$dbhost = 'localhost';
		$dbport = '27017';
		$this->conn = new MongoDB\Driver\Manager("mongodb://$dbhost:$dbport");
	}
	public function select($coleccion,$filtro=array()){
		$query = new MongoDB\Driver\Query($filtro);
		$cursor = $this->conn->executeQuery($this->database.'.'.$coleccion, $query);
		return $cursor->toArray();
	}

	public function insert($coleccion,$data){
		$bulk = new MongoDB\Driver\BulkWrite;
		$bulk->insert($data);
		$result = $this->conn->executeBulkWrite($this->database.'.'.$coleccion, $bulk);
	}

	public function update($coleccion,$data,$criterio = array() ,$upsert = false,$multi = true){
		$bulk = new MongoDB\Driver\BulkWrite;
		$bulk->update($criterio,['$set' => $data],['multi' => $multi, 'upsert' => $upsert]);
		$result = $this->conn->executeBulkWrite($this->database.'.'.$coleccion, $bulk);
	}
	public function delete($coleccion,$criterio = array() ,$cantidad = 1){
		$bulk = new MongoDB\Driver\BulkWrite;
		$bulk->delete($criterio, ['limit' => $cantidad]);
		$result = $this->conn->executeBulkWrite($this->database.'.'.$coleccion, $bulk);
	}

	public function insertInArray($coleccion,$data,$criterio = array() ,$upsert = true,$multi = false){
		$bulk = new MongoDB\Driver\BulkWrite;
		$bulk->update($criterio,['$push' => $data],['multi' => $multi, 'upsert' => $upsert]);
		$result = $this->conn->executeBulkWrite($this->database.'.'.$coleccion, $bulk);
	}
}