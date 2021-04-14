<?php

require_once "database.php";
class SearchCategorie extends Database
{

    public $produit_id;
    public $nom_produit;
    public $image_produit;
    public $description_produit;
    public $prix_produit;
    public $categorie_produit;

    public function Foundproduit(){

        //$categorie_produit=$_POST['categorie_produit'];
        $db=$this->getPDO();


        $sql="SELECT * FROM produits WHERE categorie_produit LIKE ?";

        $req=$db->prepare($sql);
        $req->bindParam(1,$_POST['categorie_produit']);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);



    }


}