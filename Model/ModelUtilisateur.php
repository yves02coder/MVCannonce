<?php

require_once "database.php";
class ModelUtilisateur extends Database
{
    public $email_vendeur;
    public $password_vendeur;
    public $nom_vendeur;

    public function getConnexionUtilisateur(){

        $db = $this->getPDO();

        //Verifie si admin est deja connexté
        if(isset($_SESSION['email_utilisateur']) && $_SESSION['password_utilisateur']){
            ?>
            <h1>Bonjour <?= $_SESSION['email_utilisateur'] ?></h1>
            <?php

            ?>

            <?php
        }

        //Verification des champ du formulaire


        if(isset($_POST['Email_utilisateur']) && isset($_POST['password_utilisateur'])) {
            //Requète de connexion
            $sql = "SELECT * FROM utilisateurs WHERE email_utilisateur = ? AND password_utilisateur = ? ";

            //Requète préparée
            $stmt = $db->prepare($sql);

            //Bind des paramètre

            $stmt->bindParam(1, $_POST['Email_utilisateur']);
            $stmt->bindParam(2, $_POST['password_utilisateur']);
            $stmt->bindParam(3, $this->$_POST['nom_utilisateur']);
            //Attention ici 2 paramètres a liés
            $stmt->execute();

            if ($stmt->rowCount() >= 1) {
                //CReer une variavle qui liste (recherche) tous les element
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $id_utilisateur = $row['id_utilisateur']; //id de la table users de phpmyadmin
                //Recup de email
                $this->email_utilisateur = $row['email_utilisateur'];
                $this->password_utilisateur = $row['password_utilisateur'];


                if ($_POST['email_utilisateur'] === $row['email_utilisateur'] && $_POST['password_utilisateur'] === $row['password_utilisateur']) {
                    //Demarre la seesion//Booléen pour verifié si on est connecté
                    session_start();
                    $_SESSION['connecter_utilisateur'] = true;

                    $_SESSION['id_utilisateur'] = $id_utilisateur;
                    $_SESSION['email_utilisateur'] = $_POST['email_utilisateur'];


                    //La redirection


                } else {
                    echo "<p class='alert-danger p-2'>erreur email et mot passe ne sont pas correct !</p>";
                }

            } else {
                echo "<p class='alert-danger p-2 '>Merci de remplir tous les champs</p>";
            }

        }

    }
}