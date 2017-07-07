<html>
	<body>
		<h1>Welcome
		</h1>
		<div id = "primary">
			<a href="http://www.sri.com/temp.html" id = "p1">Sign Out</a></div>
		<br>
		<br>
		<br>
		<form action = "http://www.sri.com/done.php" method = "post">
			Title<br>
			<input type = "text" name = "title" id ="p2" placeholder = "Title"><br><br>
			Code<br>
			<textarea rows = "15" cols = "30" id = "p2" name = "code" placeholder = "Paste your code here"></textarea><br><br>
			<input type = "submit" value = "Submit" id = "signto">
		</form><br>
	</body>
	<style type="text/css">
		h1{
			text-align: center;
			color: yellow;
		}
		body{
			background-color: black;
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
		#primary{
			background-color: rgb(23,231,67);
			text-align: right;
			color: white;
			font-size: 24;
			margin-left: 90%;
			padding-right: 1%;
			border: 5px solid green;
		}
		#signto{
			font-size: 24;
			background-color: rgb(23, 231, 67);
			color: white;
		}
		#p2{
			font-size: 24;
		}
	</style>
</html>