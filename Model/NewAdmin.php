<?php
require_once "database.php";

class NewAdmin extends Database
{

    private $email_admin;
    private $password_admin;

    public function getRegisterAdministrateur($email_admin,$password_admin){
        $db=$this->getPDO();

        $this->email_admin=$email_admin;
        $this->password_admin=$password_admin;

        $sql = "INSERT INTO utilisateurs (email_admin,password_admin) VALUES (?,?)";
        $add = $db->prepare($sql);

        $add->bindParam(1, $this->email_admin);
        $add->bindParam(2, $this->password_admin);

        $resultat = $add->execute(array($email_admin,$password_admin));
        if ($resultat) {

            echo "<p> votre inscription a bien été enregistrée</p>";

        } else {
            echo "une erreur c'est produite veuillez recommencer ulterieurement";
        }
    }


}