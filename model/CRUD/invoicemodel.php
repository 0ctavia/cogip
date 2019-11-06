<?php
// Fichier devant contenir les CRUD (query, modifications, delete) pour les factures

function getLimitedInvoices(){
    /*
        Cette fonction va rechercher les dernières factures encodées dans la banque de donnée et 
        retourne un nombre limité de factures
    */
    $limited = 5;

    //Connection avec la base de donnée
    $conn = dbconnect();

    //Préparation de la requête de l'éditeur
    $sql = <<<SQL
        SELECT invoice.id, number, invoice.timestamp, name AS company
        FROM invoice
        LEFT JOIN company ON company.id = invoice_company_id
        ORDER BY invoice.timestamp DESC
        LIMIT ?
SQL;

    $stmt = $conn->prepare($sql);

    //éviter injection sql
    $stmt->bind_param('s', $limited);

    //exécute et récupération des données
    $stmt->execute();
    $result = $stmt->get_result();

    $rows = $result->fetch_all(MYSQLI_ASSOC);
    return $rows;
}

function getAllInvoices(){
    /*
        Cette fonction va rechercher toutes les factures dans la banque de donnée et 
        retourne toutes les compagnies
    */

    //Connection avec la base de donnée
    $conn = dbconnect();

    //Préparation de la requête
    $sql = <<<SQL
        SELECT invoice.id, number, invoice.timestamp, name AS company, type
        FROM `invoice`
        INNER JOIN company ON company.id = invoice_company_id
        ORDER BY invoice.timestamp DESC
SQL;

    $stmt = $conn->prepare($sql);

    //exécute et récupération des données
    $stmt->execute();
    $result = $stmt->get_result();

    $rows = $result->fetch_all(MYSQLI_ASSOC);
    return $rows;
}

// echo "<pre>";
// print_r(getLimitedInvoices());
// echo "</pre>";
?>
