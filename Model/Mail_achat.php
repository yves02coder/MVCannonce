<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Appel de autoloader de classe
require "vendor/autoload.php";

class Envoi_Mail extends Database
{
    public function Mail_Article()
    {
        //Insatnce de la classe phpmailer
        $mail = new PHPMailer();
        try {
            //Config pour mailtrap
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER; //Autorise le debug
            $mail->isSMTP(); //Utilisation du service mail transfer protocole
            $mail->Host = 'smtp.mailtrap.io'; //Appel du host mailtrap
            $mail->SMTPAuth = true; //Autorise et impose un user name + password
            $mail->Username = '1e9a0eeda636b9'; //Generer lors de la création du compte mailTrap = dans l'espace mailtrap roue crantée + smtp setting -> zendFramework https://mailtrap.io/inboxes/1163067/messages
            $mail->Password = '64faa6d7e0bd01'; // Idem pour le mot de passe
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //La Transport Layer Security (TLS) ou « Sécurité de la couche de transport »
            $mail->Port = 2525; //Port pour mailtrap sinon ->587 ou 465 pour `PHPMailer::ENCRYPTION_SMTPS` et gmail
            $mail->setLanguage('fr', '../vendor/phpmailer/phpmailer/language/');
            $mail->CharSet = 'UTF-8';

            //Envoyeur et destinataire
            $mail->setFrom('LeRenouveau.com', ' AdministrationModel');
            $mail->addAddress('LeRenouveau.com', 'Administrateur Renouveau.com');
            $mail->addReplyTo('LeRenouveau.com', ' AdministrationModel');
            //Connexion et requete PDO get by ID
            $user = "root";
            $pass = "";
            $db = new PDO("mysql:host=localhost;dbname=crud_mvc;charset=utf8;", $user, $pass);
            $query = "SELECT * FROM produits INNER JOIN regions ON produits.id_produit_region= regions.id_regions INNER JOIN vendeur_produit ON produits.`vendeur_id_produit`=vendeur_produit.id_vendeur WHERE id_produit=?";
            $req = $db->prepare($query);
            $produit_id = $_GET['id'];
            $req->bindParam(1, $produit_id);
            $req->execute();

            //Contenu du mail
            $mail->isHTML(true);
            $destinataire = $_POST['email_utilisateur'];
            $mail->Subject = "Validation de votre achat Renouveau.com";
            //Boucle de lecture pour retrouver le token ID
            while ($datas = $req->fetch()) {
                //Stock de l'id dans une variable
                $emailId = $datas['id'];
                //Url du liens de validation
                // $action = "http://localhost/newgites/confirmer_reservation&id=$emailId";
                //Contenus du mail

                $mail->Body = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html">
        <title>Votre reservation chez locagite.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="color: #6cc3d5;">
    <div style="color: #6cc3d5; padding: 20px;">
        <img src="https://qiwo-indie-games.alwaysdata.net/assets/images/2.jpg" style="display: block; border-radius: 100%" width="50px" height="50px">
        <h3 style="color: #1D2326">Renouveau.COM</h3>
        <!--INFOS DE DEBUG -->
        <p>ICI URL DU GITE A RESERVER : ' . $url . '</p>
        <p>ICI ID DU GITE A RESERVER: ' . $emailId . '  </p>
    </div>
    <div style="padding: 20px;">
        <h1>Loca-gite.com</h1>
        <h2>Vous : ' . $destinataire . '</h2>
        <p>Vous avez fait un achat  avec le liens suivant</p><br />
        <p>Recapitulatif de votre commande</p>
        <p>Nom du produit :<b style="color: #2c4f56">' . $datas['nom_produit'] . '</b></p>
        <p>Description du produit :<b style="color: #2c4f56"> ' . $datas['description_produit'] . '</b></p>
        <p>Image du produit :<img src="https://www.leboupere.fr/medias/2016/02/Logo-gite.png"/></p>
        <p>Prix du produit :<b style="color: #2c4f56"> ' . $datas['prix_produit'] . ' €</b></p>
        
        <p>Zone géographique :<b style="color: #2c4f56"> ' . $datas['region'] . '</b></p>
      
        <p>categorie :<b style="color: #2c4f56"> ' . $datas['categorie_produit'] . '</b></p>
        <p>Toutes fois vous avez la possibilité d\'annuler ou de confirmer votre commande</p>
        <br /><br />
        <a href="' . $url . '" style="background-color: darkred; color: #F0F1F2; padding: 20px; text-decoration: none;">Confimer la reservation de votre gite</a><br />
        <br />
        <p>Merci d\'utiliser notre site web</p>
        <p>Cordialement :Le Renouveau.com: Yves : Administrateur</p>    
    </div>
    </body>
    </html>
    ';
                $mail->body = "MIME-Version: 1.0" . "\r\n";
                $mail->body .= "Content-type:text/html;charset=utf8" . "\r\n";
            }

            $mail->send();

        } catch (Exception $e) {
            echo "<p class='alert-danger p-3'>Erreur lors de la tentative d'envoi de l'email {$mail->ErrorInfo}</p>";
        }

    }
}