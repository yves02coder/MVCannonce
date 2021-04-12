<?php
require_once "../Model/NewUtilisateur.php";

function getInscriptionUtilisateur()
{

    $inscription=new NewUtilisateur();
    $inscription ->getRegisterUtilisateur('nom_utilisateur','email_utilisateur','password_utilisateur');
    if ($inscription){
        echo "votre inscription a ete bien enregistré";
        require_once "../View/connexionUtilisateur.php";
    }

}

