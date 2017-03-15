<?php 

	class models extends helper {
 	
		/**
			* $username = username
			* $password = password
			* @param get_login($username, $password)
		*/

		public function get_login($username, $password) {
			if( $username == '' || $password == '') {
				return false;
			} else {
				$sql = "SELECT * FROM users WHERE username = '$username' AND password ='$password'";
				$result = mysqli_query($this->dtb->connect(), $sql);
				$user_data = mysqli_fetch_array($result);
				$row_count = $result->num_rows;
				if( $row_count > 0 ) {
					$_SESSION['login'] = true;
					$_SESSION['id'] = $user_data['id'];
					$_SESSION['username'] = $user_data['username'];
					return true;
				} else {
					return false;
				}
			}
		}

		public function get_user() {
			$sql = "SELECT * FROM users";
			$result = mysqli_query($this->dtb->connect(), $sql);
			$user_data = mysqli_fetch_array($result);
			return [
				'id' => $user_data[0],
				'image' => $user_data[1],
				'fullname' => $user_data[2]
			];
		}

		public function get_logout() {
			$_SESSION['login'] = false;
			session_destroy();
		}

		public function set_session($user) {
			 setcookie("user", $user, time()+3600);
		}

		/**
			* @return End of the Authentication module
		*/
	}
	$function = new models();