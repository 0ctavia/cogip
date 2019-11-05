<?php
session_start();

global $urlArray;

$url = $_GET['id'];
$urlArray = explode('/', $url);
//echo $url;
//var_dump($urlArray);

// controller page Login 

//if ($_SESSION['isLoggedIn'] == TRUE){

    if($urlArray[0] == 'login'){
        require "controller/logincontroller.php";
        verifyLogin();
        $_SESSION['bodytag'] ='login';
    }

    elseif($urlArray[0] =='home' OR $urlArray[0] == 'welcome'){
            require "controller/welcomecontroller.php";
            $_SESSION['choice'] = 'welcome';
            $_SESSION['bodytag'] = '';
    }

    elseif($urlArray[0] =='edit') {
            require "controller/editcontroller.php";
            $_SESSION['choice'] = 'edit';
    }

    elseif($urlArray[0] =='compagnies' OR $urlArray[0]=='factures') {
        //envoyer vers le controller de consultation si déjà loggé
            require "controller/consultcontroller.php";
            consultViewPicker();
    }
        //le controlleur de consultation de la db va lui aussi employer le $urlArray afin de chopper les views nécessaires

//    else {
//        require "controller/welcomecontroller.php";
//    }
//}
else {
        require "controller/logincontroller.php";
        verifyLogin();
        $_SESSION['bodytag'] ='login';
    }


?>
