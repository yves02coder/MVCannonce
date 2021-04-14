<?php
require_once "database.php";

class Regions_modele extends Database
{
    private $id_region;
    private $nom_region;

    public function afficherToutesRegions(){
        $db = $this->getPDO();
        $sql = "SELECT * FROM regions";

        $stmt = $db->query($sql);
        return $stmt;
    }

    public function afficherAnnonceParRegion($id){
        //Afficher les détails de l'annonce par regions
        $db = $this->getPDO();
        $sql ="SELECT * FROM produits INNER JOIN regions ON produits.id_produit_region= regions.id_regions INNER JOIN vendeur_produit ON produits.`vendeur_id_produit`=vendeur_produit.id_vendeur WHERE `id_produit_region`=?";

        $stmt = $db->prepare($sql);
        $id=$_GET['id'];
       $stmt->bindParam(1,$id);
        $stmt->execute(array($id));
        $getRegion = $stmt->fetchAll(PDO::FETCH_ASSOC);
       return $getRegion;

    }
}