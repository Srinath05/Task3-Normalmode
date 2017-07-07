<html>
	<?php
		$s = fopen("username.txt", "r");
		$t = fopen("password.txt", "r");
		while(!feof($s)){
			if(fgets($s) == $_POST["username"] && fgets($t) == $_POST["password"]){
				header("location: http://www.sri.com/success.php");
			}
			else{
				echo "Username or Password is invalid";
			}
		}
	?>
</html>