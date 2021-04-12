<?php
require_once "database.php";
//Import de la classe php mailer intalée depuis composer  = composer require phpmailer/phpmailer
//Le tous est dans le dossier vendor
//Appel des namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//On utilise autoload si un classe n'est pas trouvée
require "../vendor/autoload.php";


class Email_utilisateur extends Database
{



    private $email_utilisateur;
    private $message_utilisateur;


    public function validerEmailUtilisateur(){
        //Insatnce de la classe phpmailer
        $mail = new PHPMailer();
        try {
            //Config pour mailtrap
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER; //Autorise le debug
            $mail->isSMTP(); //Utilisation du service mail transfer protocole
            $mail->Host = 'smtp.mailtrap.io'; //Appel du host mailtrap
            $mail->SMTPAuth = true; //Autorise et impose un user name + password
            $mail->Username = '2a7abc3ab84db8'; //Generer lors de la création du compte mailTrap = dans l'espace mailtrap roue crantée + smtp setting -> zendFramework https://mailtrap.io/inboxes/1163067/messages
            $mail->Password = 'e72b97a3e46156'; // Idem pour le mot de passe
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //La Transport Layer Security (TLS) ou « Sécurité de la couche de transport »
            $mail->Port = 2525; //Port pour mailtrap sinon ->587 ou 465 pour `PHPMailer::ENCRYPTION_SMTPS` et gmail
            $mail->setLanguage('fr', '../vendor/phpmailer/phpmailer/language/');
            $mail->CharSet = 'UTF-8';

            //Envoyeur et destinataire
            $mail->setFrom('annonce@gmail.com', 'Annonces Administration');
            $mail->addAddress('annonce@gmail.com', 'Administrateur Annonces.com');
            $mail->addReplyTo('annonce@gmail.com', 'Annonces Administration');
            //Connexion et requete PDO get by ID
            $user = "root";
            $pass = "";
            $db = new PDO("mysql:host=localhost;dbname=crud_mvc;charset=utf8;", $user, $pass);
            $query ="SELECT * FROM utilisateurs WHERE email_utilisateur=?";
            $req = $db->query($query);


            //Contenu du mail
            $mail->isHTML(true);
            $this->email_utilisateur= $_POST['email_utilisateur'];
            $this->email_utilisateur = $_POST['message_utilisateur'];

            $mail->Subject = "Prise de contact pour achat";

            $ajouterUtlisateur = $db->prepare("INSERT INTO `utilisateurs`(`nom_utilisateur`, `email_utilisateur`, `password_utilisateur`) VALUES (?,?,?)");
            //Liaison des paramètres
            $ajouterUtlisateur->bindParam(1, $this->nom_utilisateur);
            $ajouterUtlisateur->bindParam(2, $this->email_utilisateur);
            $ajouterUtlisateur->bindParam(3, $this->password_utilisateur);
            //Execution de la requète
            $ajouterUtlisateur->execute(array($this->nom_utilisateur, $this->email_utilisateur, $this->password_utilisateur));
            $redirect = "http://localhost/CRUDMVC/connexionUtilisateur";
            //Contenus du mail
            $mail->Body = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html">
        <title>Prise de contact</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="color: #43617f; font-size: 22px;">
    <div style="padding: 20px;">
        <h1>Annonce.com</h1>
        <h2>Bonjour : '.$this->email_utilisateur.'</h2>
        <p>Prise de contact pour l\'annonce : </p><br />
        <p>Message :<b style="color: #8b0000">'.$this->message_utilisateur.'</b></p>
        <br /><br />
        <br /><br />  
    </div>
    </body>
    </html>
    ';
            $mail->body = "MIME-Version: 1.0" . "\r\n";
            $mail->body .= "Content-type:text/html;charset=utf8" . "\r\n";


            $mail->send();
        }catch (Exception $e){
            echo "<p class='alert-danger p-3'>Erreur lors de la tentative d'envoi de l'email {$mail->ErrorInfo}</p>";
        }

    }

}