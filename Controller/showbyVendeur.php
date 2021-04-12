<?php
function afficherParVendeur(){
    //Insatnce du de la classe Annonce
    $Produit = new ProduitByVendeurModel();
    $vendeurProduit = $Produit->afficherAnnoneParUtilisateur();
    require_once "../View/gestion_vendeur.php";
}

