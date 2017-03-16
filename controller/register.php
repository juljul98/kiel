<?php
	global $message;
	if(isset($_POST['register'])) {
		$image = $input->file('image');
		$username = $input->request('username');
		$email = $input->request('email');
		$firstname = $input->request('firstname');
		$middlename = $input->request('middlename');
		$lastname = $input->request('lastname');
		$gender = $input->request('gender');
		$address = $input->request('address');
		$month = $input->request('month');
		$day = $input->request('day');
		$year = $input->request('year');
		$birthday = $month .' '. $day .' '. $year;
		$pass_temp = $input->request('password2');
		$password = md5($pass_temp);
		$message = $function->get_register($image,$username,$email,$password,$firstname,$middlename,$lastname,$gender,$address,$birthday);
	}
