<?php
session_start();

$url = $_GET['id'];
$urlArray = explode('/', $url);

//LA PARTIE CI-DESSOUS RESTE COMMENTEE JUSQU'AU PASSAGE LIVE
//if ($_SESSION['isLoggedIn'] == TRUE){
if($urlArray[0] == 'login'){
    $_SESSION['bodytag'] ='login';
    require "controller/logincontroller.php";
    verifyLogin();
}

elseif($urlArray[0] =='home' OR $urlArray[0] == 'welcome'){
    //controlleur de la page welcome ou home
    //la variable ci-dessous permet de definir le type de query ds le model
    $_SESSION['choice'] = 'welcome';
    $_SESSION['bodytag'] = '';
    require "controller/welcomecontroller.php";

}

elseif($urlArray[0] =='edit') {
    //controlleur du module d'édition aussi appelé dashboard
    require "controller/editcontroller.php";
    //la variable ci-dessous permet de definir le type de query ds le model
    $_SESSION['choice'] = 'edit';

}

elseif($urlArray[0] =='compagnies' AND (!empty($urlArray[1]))) {
    //envoyer vers le controlleur pour les requetes single
    $_SESSION['bodytag']="";
    require "controller/consultcontrollerone.php";
}

elseif ($urlArray[0] =='compagnies' AND (empty($urlArray[1]))){
    //envoyer vers le controlleur pour les requestes type ALL
    $_SESSION['bodytag']="";
    require "controller/consultcontrollerall.php";
}
// LA PARTIE CI-DESSOUS RESTE COMMENTEE JUSQU'A PASSAGE LIVE
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
