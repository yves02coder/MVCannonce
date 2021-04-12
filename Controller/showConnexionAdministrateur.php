<?php
require_once "../Model/Administration_modele.php";

function connecterAdministrateur()
{
    $administrateur = new Administration_modele();
    $administrateur ->connexionAdministration();
    if ( $_SESSION['connecter_administrateur']=true){

        require_once "../View/espaceAdministration.php";
    }
}
