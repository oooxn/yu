<?php

final class Mysql {
	// private $host = '';
	// private $username = '';
	// private $password = '';
	// private $dbname = '';
	// private $port = '';
	protected $_result;

	public function init($host, $username, $password, $dbname = '', $port = 3306) {
		$dsn = 'mysql:dbname'.$dbname.';host='.$host;
		$this->_result = new PDO($dsn, $username, $password);
	}
}