<?php
//Fichier pour les model de la page login


	//connexion à ma DB || include de ma connexion à ma DB

	//Exemple de connexion:

//	$servername = "database";
//	$usernamedb = "root";
//	$passworddb = "root";
//	$dbname = "becode";

//	$conn = mysqli_connect($servername, $usernamedb, $passworddb, $dbname);


	// Check connection


	// connexion au profile via mon login  

function verify_login($login){
		
		//$conn = dbconnect();
		$sql = "SELECT  * FROM user WHERE username='".$login."' limit 1";

		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		
		if ($resultcheck == 1){ // Si il y a bien un username dans la DB qui est  == a l'input
			if(password_verify($password, $row['password'])){ 
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
		else {
			return FALSE;
		} 

}


?>
