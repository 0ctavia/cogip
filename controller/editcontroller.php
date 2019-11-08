<?php 
//ceci est le controller qui va permettre de gérer les pages pour éditer.

//Il doit faire le choix entre les view winner mode et les view admin mode
//D'abord stocker la variable de session dans un usertype


require "database/connection.php";
require "model/CRUD/invoicemodel.php";
require "model/CRUD/compagniesmodel.php";
require "model/CRUD/contactmodel.php";
require "model/CRUD/insertmodel.php";
require "model/CRUD/usermodel.php";

$usertype = $_SESSION['mode'];


$invoiceList = getLimitedInvoices();
$companyList = getLimitedCompanies();
$contactList = getLimitedContacts();
$usertype = $_SESSION['mode'];
if ($_SESSION['mode'] == 'winner') $userList = getAllUsers();

require "view/dashboardview.php";

//il faut pouvoir gérer quels modules d'édition sont disponibles (invoice, compagnie, contacts)


//Controleur pour le register user, invoice, company, contact,

$create = "contact"; // variable d'url;

$companyAll = companyselect();
$contactAll = contactselect();

require"forms.php";
//variable du  formulaire = valeur des inputs

$firstname = filter($_POST["firstname"]);
$lastname = filter($_POST["lastname"]);
$telephone = filter($_POST["telephone"]);
$email = filter($_POST["email"]);
$company = filter($_POST["company"]);
$vat = filter($_POST["vat"]);
$country = filter($_POST["country"]);
$companyType = filter($_POST["companyType"]);
$contactId =filter($_POST["contactId"]);
$companyId = filter($_POST["companyId"]);
$company = intval(filter($company));
$number = filter($_POST["number"]);
$password = crypt($_POST["password"]);
$username = filter($_POST["username"]);
$type = filter($_POST["type"]);


	if(isset($_POST["envoi"])){
		if(!empty($_POST)){
			switch($create){
				case 'contact':
					if((validatetext($firstname)== true) AND
						(validatetext($lastname) == true) AND
						(validatePhone($telephone) == true) AND
						(validateEmail($email) == true) AND
						(validatetext($company)==true)){
							insertcontact($firstname,$lastname,$telephone,$email,$company);
					}
					else{echo "erreur";}
					break;
				case 'company':
					if(validatetext($firstname)== true){
						insertcompany($firstname,$country,$vat,$companyType);
					}
					break;
				case 'invoice':
					insertinvoice($number,$companyId, $contactId);
					break;
				case 'user':
					if((validatetext($username) == true) AND
						(validatePassword($password) == true)){
						insertuser($username,$password,$type);
					}
					else{echo "erreur";}
					break;
			}
		}
	}
	else{}


//?>
