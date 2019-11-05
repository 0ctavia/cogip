<?php
// Fichier devant contenir les différentes fonctions pour faire les query, les modifications et les delete sur la table contact.

function getLimitedContacts(){
    /*
        Cette fonction va rechercher les derniers contacts encodés dans la banque de donnée et 
        retourne un nombre limité de contacts
    */
    $limited = 5;

    //Connection avec la base de donnée
    $conn = dbconnect();

    //Préparation de la requête
    $sql = <<<SQL
        SELECT contact.id, firstname, lastname, email, name AS company
        FROM contact
        LEFT JOIN company ON company.id = contact.contact_company_id
        ORDER BY contact.timestamp DESC
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

// echo "<pre>";
// print_r(limitedContact('welcome'));
// echo "</pre>";
?>
