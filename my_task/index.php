<?php
require_once('controller.php');
require_once('model.php');

@$ent=$_REQUEST['ent'];

$user_controller=new UserController();

switch ($ent) {
	case 'Login':
		$username = $_POST['user_name'];
		$password = $_POST['user_pass'];

		if($user_controller->login($username, $password)){
			header("Location:main.php");
		} else {
		 echo '<script type="text/javascript">alert("Wrong username or password!");</script> <meta http-equiv="refresh" content="0;URL=login.php" />';
			//header("Location:login.php");
		}

		break;
		
	case 'logout':
		$user_controller->logout();
		header("Location:login.php");
		break;

		
	
	default:
		header("Location:login.php");
		break;
}

?>