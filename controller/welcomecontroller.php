<?php

require "database/connection.php";
require "model/CRUD/invoicemodel.php";
require "model/CRUD/compagniesmodel.php";
require "model/CRUD/contactmodel.php";

echo $_SESSION['username'];
//ceci est un gros controller qui doit récupérer des tas d'infos des CRUD que nous avons
//notamment les 5 derniers contacts, les 5 dernières factures etc
//envoyer ça dans le view welcome
//en fonction de ce qui est cliqué dans le view, renvoyer vers le controller de consultation

$invoiceList = getLimitedInvoices();
$companyList = getLimitedCompanies();
$contactList = getLimitedContacts();

// echo "<pre>";
// print_r($invoice);
// echo "</pre>";

require "view/welcomewinnerview.php";
?>
