<?php
//ce controlleur doit regler le login
//verifier que les données utilisateur sont bien présentes dans la table username


function view_login(){
	require "view/loginview.php";
}

function good_login(){

	if(isset($_POST['submit'])){
	require "function/sanitize.php"; 
			// controle les inputs

		if(valid($_SESSION['username']) == TRUE AND password_validated($_SESSION['password']) == TRUE){
			require "model/loginmodel.php";
			//function sql pour voir si le input est bien dans la DB 

			if(check_login($_POST['username']) == TRUE){
				
				//Si le le login est correct il doit etre redireger vers le controller welcomecontroller

				header("location: home");
			}
			else{
				 return "error username or password";
				 view_login();
			}
		}
	}
	view_login();
	
}


?>
