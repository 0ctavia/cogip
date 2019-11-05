<?php
session_start();

	$url = $_GET['id'];
	$urlArray = explode('/', $url);
//echo $url;
//var_dump($urlArray);

// controller page Login 

	if($urlArray[0] == 'login'){
		require "controller/logincontroller.php";
        verifyLogin();
        $_SESSION['bodytag'] ='login';
	}

    elseif($urlArray[0] =='home'){
        if (empty($_SESSION['isLoggedIn'])) {
            require "controller/logincontroller.php";
        } else {
            require "controller/welcomecontroller.php";
        }
    
    }

    elseif($urlArray[0] =='compagnies'){
        //lien vers la page compagnies view all si pas de id
        //lien vers la page compagnie view one si ID
    }

    //    if($urlArray[0] =='factures'){}
    //    if($urlArray[0] =='contacts'){
    //    if($urlArray[0] ==''){
    //

    else {
        require "controller/logincontroller.php";
        verifyLogin();
        echo "Une erreur est survenue, merci de vous reconnecter";

	}
?>
