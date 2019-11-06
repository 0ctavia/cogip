<?php
//"Bienvenue sur le controller pour consulter la banque de données"

function consultViewPicker($choice){
	require "database/connection.php";

	// Changement de model pour une seul view

	$list;

	switch($choice){
		case "compagnies":
			require "model/CRUD/compagniesmodel.php";
			$list = getAllCompanies();
			break;
		case "factures":
			require "model/CRUD/invoicemodel.php";
			$list = getAllInvoices();
			break;
		case "contacts":
			require "model/CRUD/contactmodel.php";
			$list = getAllContact();
			break;
	}
	require "view/consultallview.php";
};
//Controller pour les pages ou l'on peut consulter la banque de données
//Doit appeler soit un view ALL, soit une view detail ou one
//en fonction de ce qui est cliqué comme information

function addColumn($list){
	if (!empty($list)){
		foreach($list[0] as $key => $value){
			switch ($key){
				case 'name':
				case 'company':
					echo "<th>Nom de la compagnie</>";
					break;
				case 'number':
					echo "<th>Numéro de facture</>";
					break;
				case 'timestamp':
					echo "<th>Date</>";
					break;
				case 'type':
					echo "<th>Type</>";
					break;
				case 'vat':
					echo "<th>TVA</>";
					break;
				case 'country':
					echo "<th>Pays</>";
					break;
				case 'firstname':
					echo "<th>Prénom</>";
					break;
				case 'lastname':
					echo "<th>Nom de famille</>";
					break;
				case 'email':
					echo "<th>Email</>";
					break;
				case 'phone':
					echo "<th>Téléphone</th>";
					break;
			}
		}
	}
}




		?>




