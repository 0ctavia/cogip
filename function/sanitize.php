<?php

	//Input type text valid:

function valid($type_text){
	if(empty($type_text)){
		return "champ obligatoire";
	}
	else if(!preg_match('`^[a-zA-Z \'\-\.]+$`', htmlspecialchars($type_text))){
		return "nom incorrecte";
	}
	else{
		return TRUE;
	}
}


	//Input type password valid:

function password_validated($type_password){

	if(empty($type_password)){
		return "champ obligatoir";
	}
	else{
		return TRUE;
	}
}

	
	//Input type email valid:

function valid_email($type_email){

	if(empty($type_email)){
		return "champ obligatoire";
	}
	else if(!filter_var($type_email, FILTER_VALIDATE_EMAIL)){
		return "email incorrecte";
	}
	else{
		return TRUE;
	}
}


	//Input number type tel:

function valid_phone($type_phone){
	
	if(empty($type_phone)){
		return "champ obligatoire";
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





