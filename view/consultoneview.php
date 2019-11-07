<?php
// Employer la variable $choice comme placeholder pour récupérer l'url

function consultViewOnePicker($choice, $chosenId) {
    require "database/connection.php";

    $list;

    switch($choice){
        case "compagnies":
            require "model/CRUD/compagniesmodel.php";
            //$list = fonction qui va chercher une seule requete, lui passer le $chosenID
            break;
        case "factures":
            require "model/CRUD/invoicemodel.php";
            //$list = reçoit la fonction qui va chercher une seule requête, lui passer le $chosenID de la facture
            break;
        case "contacts":
            require "model/CRUD/contactmodel.php";
            //idem que ci-dessus pour la variable $list
            //
            //VERIFIER
            //Chercher une seule compagnie dans le type fournisseur ou client, cmt ça se passe dans le html, comment ça va être géré par le routeur.
    
    }
}

?>
