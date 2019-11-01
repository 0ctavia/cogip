<?
	
	$url = $_GET['id'];
	$r = explode('/', $url);


// controller page Login 

	if($url == 'login'){
		require "controller/logincontroller.php";
		good_login();
	}

// controller page welcome

	if($url == 'home'){
	 echo 'rififi';
	}

