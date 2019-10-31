<?php
// Fichier devant contenir les CRUD pour query, modification, suppression du tablea client.
// Ce fichier doit également permettre de faire des sélections, edit etc. en fonction de la colonne type: client ou fournisseur

require "../../database/connect.php";

function getLimitedCompanies(){
    /*
        Cette fonction va rechercher les dernières compagnies encodées dans la banque de donnée et 
        retourne un nombre limité de compagnies
    */
    $limited = 5;

    //Connection avec la base de donnée
    $conn = connect();

    //Préparation de la requête
    $sql = <<<SQL
        SELECT id, name, type
        FROM company
        ORDER BY timestamp DESC
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