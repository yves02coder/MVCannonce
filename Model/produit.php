<?php
//toute les requètes ici
require_once "database.php";


class Produit extends Database
{
    public $produit_id;
    public $nom_produit;
    public $image_produit;
    public $description_produit;
    public $prix_produit;
    public $categorie_produit;
    public $id_vendeur;

    public function getAllproduit()
    {
        $db=$this->getPDO();

        $sql="SELECT * FROM produits INNER JOIN regions ON produits.id_produit_region= regions.id_regions INNER JOIN vendeur_produit ON produits.`vendeur_id_produit`=vendeur_produit.id_vendeur ORDER BY nom_produit ASC";
      $stmt=$db->query($sql);
      return $stmt;

    }

}

