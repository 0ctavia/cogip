<?php
//ce controlleur doit regler le login
global $usernameError;
global $passwordError;
global $username;
global $password;

function view_login(){
    require "view/loginview.php";
}

function verifyLogin(){

    if(isset($_POST['submit'])){
        require "function/sanitize.php";

        if(validateText($_POST['username']) == TRUE AND validatePassword($_POST['password']) == TRUE){
            $username = $_POST['username'];
            $password = $_POST['password'];
            require "model/loginmodel.php";
            //function sql pour voir si l'input est bien dans la DB 
            checkLogin($username, $password);
            //Si le le login est correct il doit etre redireger vers le controller welcomecontroller
        }
        else {
            $usernameError = validateText($_POST['username']);
            view_login();
        }

    }
    view_login();

}


?>
