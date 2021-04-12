<?php
require_once "database.php";

class NewVendeur extends Database
{
    public function getRegisterVendeur(){
        $db=$this->getPDO();

        $sql = "INSERT INTO vendeur_produit (nom_vendeur,email_vendeur,password_vendeur) VALUES (?,?,?)";
        $add = $db->prepare($sql);
        $add->bindParam(1, $_POST['nom_vendeur']);
        $add->bindParam(2, $_POST['email_vendeur']);
        $add->bindParam(3, $_POST['password_vendeur']);

        $resultat = $add->execute(array($_POST['email_vendeur'],$_POST['password_vendeur'],$_POST['nom_vendeur']));
        if ($resultat) {
            var_dump($resultat);
            echo "<p> votre inscription a bien été enregistrée</p>";
            echo "<a href='../View/connexionVendeur.php' class='btn btn-danger'>connexion</a>";

        } else {
            echo "une erreur c'est produite veuillez recommencer ulterieurement";
        }
    }


}