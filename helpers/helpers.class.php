<?php 

	class helper {
		
		function __construct() {
			$this->dtb = new Database();
		}

		public function request($data) {
			$request = $_POST["$data"];
			return $request;
		}

		public static function AUTH() {
			$fullname = $_SESSION['fullname'];
			return $fullname;
		}

		public static function PAGE() {
			$actual_link = helper::URL();
		    $title_arr = explode("/", $actual_link);
		    $filename = end($title_arr);
		    $title = str_replace("-", " ", $filename);
		    return $title;
		}

		public function capitalize($char) {
 			$title_inc = ucfirst(preg_replace('/\\.[^.\\s]{3,4}$/', '', $char));
 			return $title_inc;
		}

		public static function URL() {
			$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			return $actual_link;
		}

		public static function ACTION() {
			$post = array_keys($_POST);
			$get_last = end($post);
			$post_name = explode("_", $get_last);
			return $post_name[0];
		}

		// QUERY BUILDER

		public function show_query($sql_query) {
			$result = mysqli_query($this->dtb->connect(),$sql_query);
		    for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);
		    return $set;
		}

		public function delete_query($sql_query, $name) {
			mysqli_query($this->dtb->connect(), $sql_query);
		}
	}
	// Public functions
	$input = new helper();