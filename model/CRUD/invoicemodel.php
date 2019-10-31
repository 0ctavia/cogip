<?php
// Fichier devant contenir les CRUD (query, modifications, delete) pour les factures

require "../../database/connect.php";

function getLimitedInvoices(){
    /*
        Cette fonction va rechercher les dernières factures encodées dans la banque de donnée et 
        retourne un nombre limité de factures
    */
    $limited = 5;

    //Connection avec la base de donnée
    $conn = connect();

    //Préparation de la requête
    $sql = <<<SQL
        SELECT invoice.id, number, name AS company
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
?>
