<?php
require_once "../Model/ProduitByVendeurModel.php";

function afficherParVendeur(){
    //Insatnce du de la classe Annonce
    $Produit = new ProduitByVendeurModel();
    $Produit = $Produit->afficherAnnoneParUtilisateur();
    require_once "../View/gestion_vendeur.php";
}

/*function afficherUtilisateurParID($id){
    $utilisateur = new ProduitByVendeurModel();
    $afficherUtilisateurParId = $utilisateur->$afficherUtilisateurParId($_GET['id']);
    require_once '../View/email_vendeur.php';
    return $afficherUtilisateurParId;
}*/



