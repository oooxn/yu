<?php

final class Mysql {
	// private $host = '';
	// private $username = '';
	// private $password = '';
	// private $dbname = '';
	// private $port = '';
	protected $_result;
	protected $PDOStatement;

	public function init($host, $username, $password, $dbname = 'test', $port = 3306) {
		$dsn = 'mysql:dbname='.$dbname.';host='.$host.';port='.$port;
		$conn = null;
		try {
			$conn = new PDO($dsn, $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo $e->getMessage();
		}

		$this->_result = $conn;
		
	}

	/**
	 * 查询语句
	 * @param string $sql
	 */
	public function query($sql) {
		$rs = $this->_result->query($sql);
		$rs->setFetchMode(PDO::FETCH_ASSOC);
		$result_arr = $rs->fetchAll();
		return $result_arr;
	}
}