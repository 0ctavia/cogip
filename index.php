<?php
session_start();

	$url = $_GET['id'];
	$r = explode('/', $url);


// controller page Login 

	if($url == 'login'){
		require "controller/logincontroller.php";
        good_login();
        $_SESSION['bodytag'] ='login';
	}

// controller page welcome

	if($url == 'home'){
	 echo 'rififi';
	}
?>
