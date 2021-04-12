<?php

require_once "database.php";
class ProduitByvendeur extends Database
{
    private $id_vendeur;

    public function getproduitByvendeur(){

        $db=$this->getPDO();
        $sql="SELECT * FROM produits INNER JOIN regions ON produits.id_produit_region= regions.id_regions INNER JOIN vendeur_produit ON produits.`vendeur_id_produit`=vendeur_produit.id_vendeur ORDER BY id_produit";
        $this->id_produit = $_SESSION['email_vendeur'];
        //Requète préparée
        $request = $db->prepare($sql);
        //Lié les paramètres
        $request->bindParam(1, $this->id_vendeur);

        //Execution de la requète
        $request->execute();
        //Retourne un objet de resultats


        return $request->fetchAll(PDO::FETCH_ASSOC);

    }
}