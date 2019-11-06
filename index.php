<?php
session_start();

$url = $_GET['id'];
$urlArray = explode('/', $url);
//echo $url;
//var_dump($urlArray);

// controller page Login 

//if ($_SESSION['isLoggedIn'] == TRUE){
if($urlArray[0] == 'login'){
    $_SESSION['bodytag'] ='login';
    require "controller/logincontroller.php";
    verifyLogin();


}

elseif($urlArray[0] =='home' OR $urlArray[0] == 'welcome'){
    $_SESSION['choice'] = 'welcome';
    $_SESSION['bodytag'] = '';
    require "controller/welcomecontroller.php";

}

elseif($urlArray[0] =='edit') {
    require "controller/editcontroller.php";
    $_SESSION['choice'] = 'edit';

}

elseif($urlArray[0] =='compagnies' OR $urlArray[0]=='factures' OR $urlArray[0]=='contacts') {
    //envoyer vers le controller de consultation si déjà loggé
    $_SESSION['bodytag']="";
    require "controller/consultcontroller.php";
    consultViewPicker($urlArray[0]);
}
//le controlleur de consultation de la db va lui aussi employer le $urlArray afin de chopper les views nécessaires

//    else {
//        require "controller/welcomecontroller.php";
//    }
//}
else {
    $_SESSION['bodytag'] ='login';
    require "controller/logincontroller.php";
    verifyLogin();
}


?>
