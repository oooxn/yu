<?php

final class Mysql {
	// private $host = '';
	// private $username = '';
	// private $password = '';
	// private $dbname = '';
	// private $port = '';
	protected $_result;
	protected $PDOStatement;
	protected $conn;

	/**
	 * 单例模式处理连接数据库
	 * @date 12-26修改
	 */
	public function init($host, $username, $password, $dbname = 'test', $port = 3306) {
		if ($this->conn) {
			$this->_result = $this->conn;
		} else {

			$dsn = 'mysql:dbname='.$dbname.';host='.$host.';port='.$port;
			try {
				$this->conn = new PDO($dsn, $username, $password);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $e) {
				echo $e->getMessage();
			}

			$this->_result = $this->conn;
		}
		
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