<?php
require 'config.php';
class MysqlDatabase {
	private $connection;

	function __construct() {
		$this->open_connection();
	}
	public function open_connection() {
		$this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
		if (!$this->connection) {
			die('BD connection failed: '. mysqli_error());
		} else {
			$db_select = mysqli_select_db($this->connection, DB_NAME);
			if (!$db_select) {
				die().mysqli_error;
			}
		}
	}

	public function close_connection() {
		if (isset($this->connection)) {
			mysqli_close($this->connection);
		}
	}

	public function query($sql) {
		$result = mysql_query($sql, $this->connection);
		if (!$result) {
			die(mysqli_error());
		}
		return $result;
	}

	public function mysql_prep($value) {
		$magic_quote_active = get_magic_quotes_gpc();
		$new_enouph_php = function_exists(function_name)
	}
}

$database = new MysqlDatabase();