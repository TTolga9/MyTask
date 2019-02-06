<!DOCTYPE html>
<?php
require_once('model.php');
session_start();

if(!isset($_SESSION['user_name'])){
	header("Location:login.php");
} else {
	$user = $_SESSION['user_name'];
}
?>
<html>
<head>
	<title>Welcome, </title>
	<style type="text/css">
		#btn{

		}
	</style>
</head>
<body> 
	<p>Welcome, <?php echo $_SESSION['user_name']; ?>
	 this is your account.
	<form method="POST" action="index.php">
		<input type="submit" id="btn" name="ent" value="logout">
	</form>
	</p>

</body>
</html>