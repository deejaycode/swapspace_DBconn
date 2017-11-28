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
	}






?>