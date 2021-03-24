<?php

class QueryBuilder{
	
	protected $pdo;

	function __construct($pdo){
		$this->pdo = $pdo;
	}

	public function selectAll($table){
		$statament = $this->pdo->prepare('select * from ' . $table);
		$statament->execute();
		return $statament->fetchAll(PDO::FETCH_CLASS);
		
	}

	public function insert($table, $parameters){
		$sql = sprintf('insert into %s (%s) values (%s)', $table, 
			implode(', ', array_keys($parameters)),
			':' . implode(', :', array_keys($parameters)));

		try{
			$statament = $this->pdo->prepare($sql);

			$statament->execute($parameters);
		}catch(Exception $e){
			die($e->getMessage());
		}	
	}

	public function delete($table, $parameters){		
		$sql = sprintf('delete from %s where %s = %s', $table, 
			implode(', ', array_keys($parameters)),
			':' . implode(', :', array_keys($parameters)));

		try{
			$statament = $this->pdo->prepare($sql);

			$statament->execute($parameters);
		}catch(Exception $e){
			die($e->getMessage());
		}	
	} 


} 