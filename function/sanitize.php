<?php
//echo "sanitize et validate inclus";
	//Input type text valid:
$usernameError = $passwordError = "";

function validateText($type_text){
echo "fonction validate tourne";
if(empty($type_text)){
        $usernameError = "Veuillez remplir votre nom d'utilisateur";
        return $usernameError;
	}
	else if(!preg_match('`^[a-zA-Z \'\-\.]+$`', htmlspecialchars($type_text))){
		$usernameError= "Erreur dans le nom d'utilisateur";
        return $usernameError;
	}
	else{
		return TRUE;
	}
}


	//Input type password valid:

function validatePassword($type_password){

	if(empty($type_password)){
		$passwordError = "Veuillez remplir un mot de passe";
	}
	else{
		return TRUE;
	}
}

	
	//Input type email valid:

function validateEmail($type_email){

	if(empty($type_email)){
		return "Champ obligatoire";
	}
	else if(!filter_var($type_email, FILTER_VALIDATE_EMAIL)){
		return "Adresse email incorrecte";
	}
	else{
		return TRUE;
	}
}


	//Input number type tel:

function validatePhone($type_phone){
	
	if(empty($type_phone)){
		return "Champ obligatoire";
	}
	else if(preg_match("'^(([\+]([\d]{2,}))([0-9\.\-\/\s]{5,})|([0-9\.\-\/\s]{5,}))*$'",
			htmlspecialchars($type_phone))){
			// phone or TVA is valided, number which '/' && '-' && +
	
		return TRUE;
	}
	else{
		return FALSE;
		}
}


	//Input type invoice:





