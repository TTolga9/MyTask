<?php

class UserController {

	function userController (){

	}

	function create($username, $password, $email){

	}

	function login($username, $password){

		if($this->authenticate($username,$password)){
			session_start();
			$user = new UserModel($username);
			$_SESSION['user_name'] = $user;
			return true;
		} else{
			return false;
		}
	}

	static function authenticate($u, $p){
	$authentic=false;
	if($u == 'tolga' &&  $p == 'tolga123'){
		$authentic = true;
	}
		return $authentic;
	}

	function logout (){
		session_start();
		session_destroy();
	}
}

?>

