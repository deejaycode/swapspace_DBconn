<?php

	class DBconn {

		private $_connection;
		private $_host;
		private $_username;
		private $_password;
		private $_dbname;

		public function __construct($_host, $_password, $_username, $_dbname) {

			this->$_connection = mysqli_connect($_host, $_username, $_password, $_dbname);

		}


		public function getResult() {

			$this->result = new Result ($this->$_connection)
		}
	}

	class Result {

		private $_result;

		public function __construct($db)
		{
			$db_query = mysqli_query($db, "SELECT * FROM books") or die (mysqli_error($db));
			$this->_result = mysqli_fetch_array($db_query));
		} 
	}






?>