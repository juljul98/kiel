<?php
	
	class Database {
		public $db_host = DB_HOST;
		public $db_name = DB_NAME;
		public $db_user = DB_USER; 
		public $db_pass = DB_PASS;
		public $conn;
		function __construct() {
		}
		public function connect() {
			$this->conn = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
			if( mysqli_connect_errno() ) {
          		return 'test';
        	}
      			return $this->conn;
		}
		// public function test(){
		// 	return 'aw';
		// }
	}