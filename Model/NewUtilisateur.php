<?php
require_once "database.php";

class NewUtilisateur extends Database
{
    private $nom_utilisateur;
    private $email_utilisateur;
    private $password_utilisateur;

    public function getRegisterUtilisateur($nom_utilisateur,$email_utilisateur,$password_utilisateur){
        $db=$this->getPDO();
        $this->nom_utilisateur=$nom_utilisateur;
        $this->email_utilisateur=$email_utilisateur;
        $this->password_utilisateur=$password_utilisateur;

        $sql = "INSERT INTO utilisateurs (nom_utilisateur,email_utilisateur,password_utilisateur) VALUES (?,?,?)";
        $add = $db->prepare($sql);
        $add->bindParam(1, $this->nom_utilisateur);
        $add->bindParam(2, $this->email_utilisateur);
        $add->bindParam(3, $this->password_utilisateur);

        $resultat = $add->execute(array($nom_utilisateur,$email_utilisateur,$password_utilisateur));
        if ($resultat) {
            var_dump($resultat);
            echo "<p> votre inscription a bien été enregistrée</p>";
           /* echo "<a href='../View/connexionUtilisateur.php' class='btn btn-danger'>connexion</a>";*/
            //header("Location:http://localhost/CRUDMVC/");
            //getConnexionUtilisateur();

        } else {
            echo "une erreur c'est produite veuillez recommencer ulterieurement";
        }
    }


}