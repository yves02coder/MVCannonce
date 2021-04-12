<?php
require_once "../Model/ClientajouterProduit.php";

function getAjouter()
{
    $ajouter = new Ajouter();
    $ajouter->getAddProduit('nom_produit','image_produit','description_produit','prix_produit','categorie_produit','id_produit_region','vendeur_id_produit');
    if ($ajouter){
        echo "votre produit a ete bien ajouté " ;

        require_once "../View/accueil.php";
    }
}

