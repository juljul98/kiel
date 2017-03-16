
<?php
	include "includes/header.php";
	echo 
	'<form action="" method="post" enctype="multipart/form-data">
		<div>
			<label for="image">Avatar</label>
			<input type="file" name="image" id="image">
		</div>
		<div>
			<label for="username">Username</label>
			<input type="text" name="username" placeholder="Username" id="username">	
		</div>
		<div>
			<label for="email">Email Address</label>
			<input type="text" name="email" placeholder="Email Address" id="email">	
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
			<label for="bday">Birthday</label>
			<select name="month" id="month">
				<option value="jan">January</option>
				<option value="feb">February</option>
				<option value="mar">March</option>
			</select>
			<select name="day" id="day">';
				for ($x=1; $x<=29; $x++) {
					echo '<option value="'.$x.'">'.$x.'</option>';
				}
			echo '</select>
				<select name="year" id="year">';
				for($x=1990; $x<=2030; $x++) {
					echo '<option value="'.$x.'">'.$x.'</option>';
				}
			echo '</select>
		</div>

		<div>
			<label for="password1">Password</label>
			<input type="password" name="password1" placeholder="Password" id="password1">
		</div>
		<div>
			<label for="password2">Confirm Password</label>
			<input type="password" name="password2" placeholder="Confirm Password" id="password2">
		</div>
		<p class="p_error">Password Not Matched!</p>
		<p class="p_success">Password Matched!</p>
		<p class="p_missing">Fill this field!</p>
		<div><button type="submit" name="register">Send</button></div>
	</form>';
	include "includes/footer.php";
	print_r($message);