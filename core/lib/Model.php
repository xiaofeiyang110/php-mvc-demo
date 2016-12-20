<?php 
namespace core\lib;

class Model extends \PDO
{
	public function __construct()
	{
		$dsn = "mysql:host=localhost;dbname=mvc_test";
		$username = "root";
		$password = "root";
		try {
			parent::__construct($dsn,$username,$password);
		} catch (\PDOException $e) {
			var_dump($e->getMessage());
		}
	}
}
