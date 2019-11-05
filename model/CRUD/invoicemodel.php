<?php
// Fichier devant contenir les CRUD (query, modifications, delete) pour les factures

require "../../database/connection.php";

function getLimitedInvoices($sql){
    /*
        Cette fonction va rechercher les dernières factures encodées dans la banque de donnée et 
        retourne un nombre limité de factures
    */
    $limited = 5;

    //Connection avec la base de donnée
    $conn = dbconnect();  

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

function limitedInvoices($choice){
    /*
        cette fonction crée la requête nécéssaire à un vue en particulier et
        retourne la liste des factures
    */

    $sql;
    switch ($choice) {
        case 'welcome':
            //Préparation de la requête du welcome
            $sql = <<<SQL
                SELECT invoice.id, number, name AS company
                FROM invoice
                LEFT JOIN company ON company.id = invoice_company_id
                ORDER BY invoice.timestamp DESC
                LIMIT ?
SQL;
            break;
        case 'edit':
            //Préparation de la requête de l'éditeur
            $sql = <<<SQL
                SELECT invoice.id, number, invoice.timestamp, name AS company
                FROM invoice
                LEFT JOIN company ON company.id = invoice_company_id
                ORDER BY invoice.timestamp DESC
                LIMIT ?
SQL;
            break;
    }

    return getLimitedInvoices($sql);
}

echo "<pre>";
print_r(limitedInvoices('edit'));
echo "</pre>";
?>
