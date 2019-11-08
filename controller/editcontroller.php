<?php 
//ceci est le controller qui va permettre de gérer les pages pour éditer.

//Il doit faire le choix entre les view winner mode et les view admin mode
//D'abord stocker la variable de session dans un usertype
$usertype = $_SESSION['mode'];

require "database/connection.php";
require "model/CRUD/invoicemodel.php";
require "model/CRUD/compagniesmodel.php";
require "model/CRUD/contactmodel.php";
require "model/CRUD/usermodel.php";

$invoiceList = getLimitedInvoices();
$companyList = getLimitedCompanies();
$contactList = getLimitedContacts();
if ($_SESSION['mode'] == 'winner') $userList = getAllUsers();

require "view/dashboardview.php";

//il faut pouvoir gérer quels modules d'édition sont disponibles (invoice, compagnie, contacts)
//?>
