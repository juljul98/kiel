<?php
	include "includes/header.php";
	echo 
	'<form action="" method="post">
		<div>
			<label for="username">Username</label>
			<input type="text" name="username" placeholder="Username" id="username">	
		</div>
		<div>
			<label for="password">Password</label>
			<input type="password" name="password" placeholder="Password" id="password">
		</div>
		<div><button type="submit" name="login">Send</button></div>
	</form>';

