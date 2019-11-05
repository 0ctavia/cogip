<?php 
//ceci est le controller qui va permettre de gérer les pages pour éditer.
echo "Bienvenue sur le edit controller.";
//Il doit faire le choix entre les view winner mode et les view admin mode
//D'abord stocker la variable de session dans un usertype
$usertype = $_SESSION['type'];
echo "Vous êtes utilisateur: ". $usertype;

if ($type = 'winner') {

    require 'view/edit/dashboard.php';
}
//il faut pouvoir gérer quels modules d'édition sont disponibles (invoice, compagnie, contacts)
//?>
