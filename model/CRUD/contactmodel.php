<?php
// Fichier devant contenir les différentes fonctions pour faire les query, les modifications et les delete sur la table contact.

require "../../database/connection.php";

function getLimitedContacts($sql){
    /*
        Cette fonction va rechercher les derniers contacts encodés dans la banque de donnée et 
        retourne un nombre limité de contacts
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

function limitedContact($choice){
    /*
        cette fonction crée la requête nécéssaire à un vue en particulier et
        retourne la liste des contacts
    */

    $sql;
    switch ($choice) {
        case 'welcome':
            //Préparation de la requête du welcome
            $sql = <<<SQL
                SELECT contact.id, firstname, lastname, name AS company
                FROM contact
                LEFT JOIN company ON company.id = contact.contact_company_id
                ORDER BY contact.timestamp DESC
                LIMIT ?
SQL;
            break;
        case 'edit':
            //Préparation de la requête
            $sql = <<<SQL
                SELECT contact.id, firstname, lastname, email, name AS company
                FROM contact
                LEFT JOIN company ON company.id = contact.contact_company_id
                ORDER BY contact.timestamp DESC
                LIMIT ?
SQL;
            break;
    }

    return getLimitedContacts($sql);
}

// echo "<pre>";
// print_r(limitedContact('welcome'));
// echo "</pre>";
?>
