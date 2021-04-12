<?php
require_once "database.php";
require_once "../asset/template.php";

class acheterClient extends Database
{
    private $id_produit;

    public function getAcheter(){
        $db=$this->getPDO();

        $sql="SELECT * FROM produits INNER JOIN regions ON produits.id_produit_region= regions.id_regions INNER JOIN vendeur_produit ON produits.`vendeur_id_produit`=vendeur_produit.id_vendeur WHERE id_produit=?";
        $acheter=$db->prepare($sql);
        $acheter->bindParam(1,$_GET['id']);
        //$this->id_produit=$_GET['id'];
        $acheter->execute();
        return $acheter;
    }
}