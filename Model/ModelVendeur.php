<?php

require_once "database.php";

class ModelVendeur extends Database

{
    public $nom_vendeur;
    public $email_vendeur;
    public $password_vendeur;


    public function getConnexionVendeur(){

        $db = $this->getPDO();

        //Verifie si vendeur est  connecté
        if(isset($_SESSION['email_vendeur']) /*&& $_SESSION['password_vendeur']*/ === true){
            ?>

            <h1 class="text-info ml-lg-5 ">Bonjour <?= $_SESSION['email_vendeur'] ?></h1>

            <?php

            ?>

            <?php
        }




            if(isset($_POST['email_vendeur']) && isset($_POST['password_vendeur'])){
                //Requète de connexion
                $sql = "SELECT * FROM vendeur_produit WHERE email_vendeur = ? AND password_vendeur = ? ";

                //Requète préparée
                $stmt = $db->prepare($sql);

                //Bindparam

                $stmt->bindParam(1, $_POST['email_vendeur']);
                $stmt->bindParam(2, $_POST['password_vendeur']);
               // $stmt->bindParam(3,$this->$_POST['nom_vendeur']);

                $stmt->execute();

                if($stmt->rowCount() >= 1){
                    //CReer une variavle qui liste (recherche) tous les element
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    $id_vendeur = $row['id_vendeur']; //id de la table users de phpmyadmin
                    //Recup de email
                    $this->email_vendeur = $row['email_vendeur'];
                    $this->password_vendeur = $row['password_vendeur'];


                    if($_POST['email_vendeur'] === $row['email_vendeur'] && $_POST['password_vendeur'] === $row['password_vendeur']){
                        //Demarre la seesion//Booléen pour verifié si on est connecté
                      // session_start();
                        $_SESSION['connecter_vendeur'] = true;

                        $_SESSION['id_vendeur'] = $id_vendeur;
                        $_SESSION['email_vendeur'] =$_POST['email_vendeur'];


                        //La redirection



                    }else{
                        echo "<p class='alert-danger p-2'>erreur email et mot passe ne sont pas correct !</p>";
                    }
                }else{
                    //echo "<p class='alert-danger mt-3 p-2'>Erreur de connexion, merci de verifié votre email et mote de passe</p>";
                }
            }else{
                echo "<p class='alert-danger p-2 '>Merci de remplir tous les champs</p>";
            }



    }

}