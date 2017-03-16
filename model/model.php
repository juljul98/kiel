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
					$_SESSION['fullname'] = $user_data['firstname'] ." ". $user_data['middlename'] ." ".$user_data['lastname'];
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

		/**
			* Register Functions
		*/

		public function get_register($image, $username, $email, $password, $firstname, $middlename, $lastname, $gender, $address, $birthday) {
			
			$date_created = date('Y-m-d H:i:s');
			$date_updated = date('Y-m-d H:i:s');

			if ($username == '' || $email == '' || $password == '' || $firstname == '' || $middlename == '' || $lastname == '' || $gender == '' || $address == '' || $birthday == '') {
				return [
					'error' => 'Please Fill all the Fields!'
				];
			} else {
				$sql = $this->dtb->connect()->prepare("INSERT INTO users(`username`, `email` ,`password`,`firstname`,`middlename`,`lastname`,`gender`,`address`,`birthday`,`date_created`,`date_updated`) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
				$sql->bind_param("sssssssssss", $username, $email, $password, $firstname, $middlename, $lastname, $gender, $address, $birthday, $date_created, $date_updated);
				$sql->execute();
				$this->dtb->connect()->close();
				$sql->close();	
				return [
					'success' => 'Successfully Saved!'
				];
			}
			

		}



	}
	// Define Class
	
	$function = new models();