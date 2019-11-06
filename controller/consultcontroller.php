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
					echo "<th>Nom de la compagnie</th>";
					break;
				case 'number':
					echo "<th>Numéro de facture</th>";
					break;
				case 'timestamp':
					echo "<th>Date</th>";
					break;
				case 'type':
					echo "<th>Type</th>";
					break;
				case 'vat':
					echo "<th>TVA</th>";
					break;
				case 'country':
					echo "<th>Pays</th>";
					break;
				case 'firstname':
					echo "<th>Prénom</th>";
					break;
				case 'lastname':
					echo "<th>Nom de famille</th>";
					break;
				case 'email':
					echo "<th>Email</th>";
					break;
				case 'phone':
					echo "<th>Téléphone</th>";
					break;
			}
		}
	}
}




		?>




