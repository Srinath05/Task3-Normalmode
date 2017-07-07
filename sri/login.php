<html>
	<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
	<body>
		<h1>SRI'S WEBSITE</h1>
		<div id = "primary">
			<a href="http://www.sri.com/temp.html" id = "p1">Sign Up</a>    or    <a href="http://www.sri.com/login.php" id = "p1">Sign In</a></div><br><br>
		<form action = "http://www.sri.com/donelogin.php" method = "post">
			Username<br>
			<input type = "text" name = "username" id ="p2" placeholder = "Username"><br><br>
			Password<br>
			<input type = "password" name = "password" id ="p2" placeholder = "Password"><br><br>
			<input type = "submit" value = "Sign In" id = "signup">
		</form>
	</body>
	<style type="text/css">
		body{
			background-color: black;
		}
		h1{
			text-align: center;
			color : yellow;
		}
		#p1{
			color: white;
			text-decoration: none;

		}
		#primary{
			background-color: rgb(23,231,67);
			text-align: right;
			color: white;
			font-size: 24;
			margin-left: 85%;
			padding-right: 1%;
			border: 5px solid green;
		}
		form{
			font-size: 24;
			background-color: white;
			border-radius: 2%;
			font-family: "Comic Sans MS";
			margin-left: 30%;
			margin-right: 30%;
			padding-top: 50px;
			padding-bottom: 50px;
			padding-left: 8%;
		}
		#signup{
			font-size: 24;
			background-color: rgb(23, 231, 67);
			color: white;
		}
		#p2{
			font-size: 24;
		}
	</style>
</html>