<?php
require_once "database.php";

class ProduitByVendeurModel extends Database
{
    public function afficherAnnoneParUtilisateur(){
        //Connexion a PDO
        $db = $this->getPDO();

        //Requète SQL + jointure
        $sql="SELECT * FROM produits INNER JOIN regions ON produits.id_produit_region= regions.id_regions INNER JOIN vendeur_produit ON produits.`vendeur_id_produit`=vendeur_produit.id_vendeur WHERE id_vendeur=?";
        //Recup de id utilisateur
        $this->id_vendeur = $_SESSION['id_vendeur'];
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