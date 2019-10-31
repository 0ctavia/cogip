<?php
//Fichier pour les model de la page login


	//connexion à ma DB || include de ma connexion à ma DB

	//Exemple de connexion:
function dbconnect(){

	$servername = "database";
	$usernamedb = "root";
	$passworddb = "root";
	$dbname = "cogip";

	$conn = mysqli_connect($servername, $usernamedb, $passworddb, $dbname);
	return $conn;

}
	// Check connection


	// check si le Login est dans la BD  

function check_login($login){
		
	$connexion = dbconnect();
			//$conn = dbconnect();
	$sql = <<<SQL
	SELECT  * FROM User
	WHERE username = '$login'
	limit 1
SQL;

	$result = mysqli_query($connexion, $sql);
	$resultcheck = mysqli_num_rows($result);	
	if($resultcheck == 1){
		
		return $resultcheck;
	}
	else{
		return "login non valide";
	}
}


function show_login($login){
	$connection = dbconnect();

	$sql = <<<SQL
	SELECT  * FROM User
	WHERE username = '$login'
	limit 1"
SQL;

	$result = mysqli_query($connection, $sql);
	$resultcheck = mysqli_num_rows($result);

	if(resultcheck == 1){
		while($row = mysqli_fetch_assoc($result)){
				session_start();
				$_SESSION['username'] = $row['username'];
		}
		return $_SESSION['username'];
	}
	else{
		return 'none';
	}
 }


//function check_password($password){
///	while($row = mysqli_fetch_assoc($result)){
//					if($password == password_verify($row['password'])
//}

?>
