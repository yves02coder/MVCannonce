<?php
require "../Model/Email_utilisateur.php";
$email_utilisateur = new Email_utilisateur();
$email_utilisateur->validerEmailUtilisateur();

if(isset($_SESSION['email_utilisateur']) && $_SESSION['password_utilisateur'] && $_SESSION['nom_utilisateur'] === true){
    if(isset($_POST['Reservation'])){
        $email_client=$this->reserver;
        echo "<h3 class='alert-success p-3 mt-3 text-danger'>Un email viens de vous etre envoyé, merci de verifié votre boite mail pour confirmer votre resevation</h3>";
    }else{
        echo "<p class='alert-warning p-3 mt-2'>Merci de remplir le formulaire avec votre email</p>";
    }

    ?>

    <div class="main-container">
        <h1 class="text-center text-info">RÉSERVATION</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="email_utilisateur">Merci d'entrer votre email</label>
                <input type="email" class="form-control" name="email_utilisateur" id="email_utilisateur" placeholder="Votre email@email.com">
            </div>
            <input type="submit" value="Reserver" name="Reservation" class="btn btn-outline-info"/>
        </form>
    </div>

    <?php
}else{
    echo "<p class='alert-warning p-5 m-5'>inscrivez vous pour beneficier de nos avantages !</p>";
    echo "<p><a href='connexionUtilisateur' class='btn btn-warning'>connexion</a></p>";
    echo "<p><a href='inscriptionUtilisateur' class='btn btn-primary'> incription</a></p>";
}

if(isset($_POST['Reservation'])){
    $email_utilisateur->validerEmailUtilisateur();
}
?>
