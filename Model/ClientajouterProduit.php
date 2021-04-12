<?php

require_once "../asset/template.php";
require_once "../Model/database.php";

class ajouter extends Database
{
    private  $nom_produit;
    private $description_produit;
    private $image_produit;
    private $prix_produit;
    private $categorie_produit;
   // private $vendeur_id_produit;

    public function getAddProduit($nom_produit,$image_produit,$description_produit,$prix_produit,$categorie_produit,$id_produit_region,$vendeur_id_produit){
        $db=$this->getPDO();
        $this->nom_produit=$nom_produit;
        $this->image_produit=$image_produit;
        $this->description_produit=$description_produit;
        $this->prix_produit=$prix_produit;
        $this->categorie_produit=$categorie_produit;
        $this->id_produit_region=$id_produit_region;
       $this->vendeur_id_produit=$vendeur_id_produit;

        //$sql="INSERT INTO produits( nom_produit, image_produit, description_produit, prix_produit, categorie_produit, id_produit_region, vendeur_id_produit) VALUES (?,?,?,?,?,?,?)";

        $sql=" INSERT INTO produits (nom_produit,image_produit,description_produit,prix_produit,categorie_produit,id_produit_region,vendeur_id_produit) VALUES (?,?,?,?,?,?,?)";
        $ajouter=$db->prepare($sql);

        $ajouter->bindParam(1, $nom_produit);
        $ajouter->bindParam(2, $image_produit);
        $ajouter->bindParam(3, $description_produit);
        $ajouter->bindParam(4, $prix_produit);
        $ajouter->bindParam(5, $categorie_produit);
        $ajouter->bindParam(6,$id_produit_region);
       $ajouter->bindParam(7,$vendeur_id_produit);

        $ajouter->execute(array(
            $_POST['nom_produit'],
            $_POST['image_produit'],
            $_POST['description_produit'],
            $_POST['prix_produit'],
            $_POST['categorie_produit'],
            $_POST['id_produit_region'],
           $_POST['vendeur_id_produit'],
        ));


        return $ajouter;


    }

}