<?php
//"Bienvenue sur le controller pour consulter la banque de données"

function consultViewPicker(){};
//Controller pour les pages ou l'on peut consulter la banque de données
//Doit appeler soit un view ALL, soit une view detail ou one
//en fonction de ce qui est cliqué comme information

require "database/connection.php";

// Changement de model pour une seul view

switch($url){
	case "compagnies":
		require "model/CRUD/compagniesmodel.php";
		$list = getAllCompanies();
		break;
	case "factures":
		require "model/CRUD/invoicemodel.php";
		$list = getAllInvoices();
		break;
	case "contact":
		require "model/CRUD/contactmodel.php";
		$list = getAllContact();
		break;
}
require "view/consultallview.php";



		?>




