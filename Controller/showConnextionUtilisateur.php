<?php
require_once "../Model/ModelUtilisateur.php";
require_once "../Model/Email_utilisateur.php";

function getConnexionUtilisateur(){

    $connexion= new ModelUtilisateur();
    $connexion->getConnexionUtilisateur();
    if ( $_SESSION['connecter_utilisateur']=true){

        require_once "../View/acheter.php";
    }



}
function envoiemail_inscription(){
    $email=new Email_utilisateur();
    $envoiemail=$email->validerEmailUtilisateur();
    return $envoiemail;
}