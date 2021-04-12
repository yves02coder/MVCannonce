<?php
require_once "../Model/NewAdmin.php";

function getAdminInscription()
{

    $inscription=new NewAdmin();
    $inscription ->getRegisterAdministrateur('email_admin','password_admin');
    if ($inscription){
        echo "votre inscription a ete bien enregistré";
        require_once "../View/connexionUtilisateur.php";
    }
}

