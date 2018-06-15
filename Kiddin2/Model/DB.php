<?php 
class DB
{
	public $pdo;

	public function __construct()
	{
		$db = C('db');
		$this->pdo=new pdo('mysql:host='.$db['host'].';dbname='.$db['dbname'],$db['username'],$db['password']);
	}

	public function select($sql)
	{
		$res = $this->pdo->query($sql);
		return $res->fetchAll();
	}
} 