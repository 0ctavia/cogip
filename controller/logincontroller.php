<?php
//ce controlleur doit regler le login
//verifier que les données utilisateur sont bien présentes dans la table username
include "../function/sanitize.php";

if(isset($_POST[// 'variable du button' ])){

		$username = $_POST['login'];
		$password = $_POST['password'];

		if(valid($username) == TRUE AND password_valided($password) == TRUE){

			if(verify_login($username) == TRUE){

				//session_start();

				//utilisation des variables SESSION 
			}
		}
		else{
			// variable Error:
		}
}
?>
