<!DOCTYPE html>

<?php
session_start();

if(isset($_SESSION['user_name'])){
	header("Location:main.php");
}
?>
<html>
<head>
	<title>Welcome to Login Page!</title>
	<style type="text/css">
		#login_page{
			margin-top: 100px; 
			margin-left: 750px;
			border: 1px solid;
			padding: 50px;
			width: 300px;
		}
		 #btn1{
		 	padding: 5px;
		 	margin: 5px;
		 	width: 75px;
			background-color: lightgreen;
		}
		 #btn2{
		 	padding: 5px;
		 	margin: 5px;
		 	width: 75px;
			background-color: orange;
		}
	</style>
</head>
<body>

<div id="login_page">
	<h2>Login</h2>

	<form method="POST" action="control.php">
		<table border="0.5">
			<tr>
				<td><label>Username</label></td>
				<td><input type="text" name="user_name"></td>
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input type="Password" name="user_pass"></td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<br>
					<input type="submit" id="btn1" name="ent" value="Login">
					<input type="reset" id="btn2" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>