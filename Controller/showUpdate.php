<?php
require_once "../Model/Update.php";
function getProduit_Update($nom_produit,$image_produit,$description_produit,$prix_produit,$categorie_produit,$id_produit_region,$id)
{
    $Update = new Update();
    $Modifie = $Update->getUpdate($nom_produit,$image_produit,$description_produit,$prix_produit,$categorie_produit,$id_produit_region,$id);


       if ($Modifie){
          echo "votre produit est mise a jour";
          require_once "../View/accueil.php";
       }else{
           echo "error ";
       }



}
