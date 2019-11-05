<?php
require "./database/connection.php";

//Fichier pour le model de la page login

	// check si le Login est dans la BD  
global $username;
global $password;

function checkLogin($login){
	$connection = dbconnect();
    $username = $_SESSION['username'];
	$sql = <<<SQL
	SELECT  * FROM user
	WHERE username = '$username'
	limit 1
SQL;
    echo "CheckLogin effectuée";
    $result = mysqli_query($connection, $sql);
    var_dump($result);
	//$resultcheck = mysqli_num_rows($result);

	if(resultcheck == 1){
		$row = mysqli_fetch_assoc($result);
        var_dump($row);
        if($row['password'] == $password) {
            $_SESSION['username'] = $username;
            $_SESSION['isLoggedIn'] = TRUE;
            header("location: home");
        }
    }
	else{
		return 'Pas d\'utilisateur trouvé';
	}
 }


//function check_password($password){
///	while($row = mysqli_fetch_assoc($result)){
//					if($password == password_verify($row['password'])
//}

?>
