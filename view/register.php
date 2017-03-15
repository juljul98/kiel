
<?php
	include "includes/header.php";
	echo 
	'<form action="" method="post">
		<div>
			<label for="username">Username</label>
			<input type="text" name="username" placeholder="Username" id="username">	
		</div>
		<div>
			<label for="firstname">First Name</label>
			<input type="text" name="firstname" placeholder="First Name" id="firstname">	
		</div>
		<div>
			<label for="middlename">Middle Name</label>
			<input type="text" name="middlename" placeholder="Middle Name" id="middlename">	
		</div>
		<div>
			<label for="lastname">Last Name</label>
			<input type="text" name="lastname" placeholder="Last Name" id="lastname">	
		</div>
		<div>
			<label for="gender">Gender</label>
			<select name="gender" id="gender">
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>	
		</div>
		<div>
			<label for="address">Address</label>
			<input type="text" name="address" placeholder="Address" id="address">	
		</div>
		<div>
			<label for="password1">Password</label>
			<input type="password" name="password1" placeholder="Password" id="password1">
		</div>
		<div>
			<label for="password2">Confirm Password</label>
			<input type="password" name="password2" placeholder="Confirm Password" id="password2">
		</div>
		<div><button type="submit" name="login">Send</button></div>
	</form>';