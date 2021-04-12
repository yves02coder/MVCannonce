<?php

require_once "../Model/ModelVendeur.php";

function getConnexion(){

    $connexion= new ModelVendeur();
     $connexion->getConnexionVendeur();
if ( $_SESSION['connecter_utilisateur']=true){
    require_once "../View/categorie.php";
}



}
