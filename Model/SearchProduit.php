<?php
require_once "database.php";


class SearchProduit extends Database
{

    public $produit_id;
    public $nom_produit;
    public $image_produit;
    public $description_produit;
    public $prix_produit;
    public $categorie_produit;

    public function Foundproduit(){

        $nomrechercher=$_GET['recherche'];
        $db=$this->getPDO();


        $sql="SELECT * FROM produits INNER JOIN regions ON produits.id_produit_region= regions.id_regions WHERE nom_produit LIKE ?";

        $req=$db->prepare($sql);
        $req->bindParam(1,$nomrechercher);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);



    }

}