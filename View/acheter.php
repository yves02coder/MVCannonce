<?php

require_once "../Controller/showClientProduit.php";
$getachat=getProduitAchat();
foreach ($getachat as $achat){


?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="container" data-aos="zoom-in"
         data-aos-duration="1000">
        <p class="text-center" style="margin-left: 100%;"><a href="connexionUtilisateur" class="btn btn-outline-danger">Connexion</a></p>
        <p class="text-center" style="margin-left: 100%;"><a href="inscriptionUtilisateur" class="btn btn-outline-warning">Inscription</a></p>
        <h1 class="text-secondary text-center">cet produit est vendu par: <?=$achat['nom_vendeur'] ?></br>
            <i class="fa fa-envelope" aria-hidden="true"></i> : <?=$achat['email_vendeur'] ?></h1>

<h3 class="text-success text-center">Le recapitulatif de l'article:<?/*=$_SESSION['email_client'] */?></h3>
<div class="jumbotron">
    <h2 class="display-4"><img src="../asset/image/poto.png" alt=""></h2>

    <p class="text-center"> <img class="card-img-top text-center " src="~/<?=$achat['image_produit']?> ?>"
             alt="" title="" style="width: 50%"></p>
    <p class="lead"><?=$achat['description_produit'] ?></p>
    <p class="text-primary text-center"><i class="fa fa-globe  fa-5x fa-spin" aria-hidden="true"></i>:<b style="font-size: 20px" class="text-danger"><?=$achat['nom_region'] ?></b></p>
    <!--<p class="text-primary text-center"><i class="fa fa-phone fa-5x  " aria-hidden="true"></i>:<b style="font-size: 20px" class="text-warning"><?/*=$achat['numero_tel_vendeur'] */?></b></p>-->
    <hr class="my-4">
    <p class="text-center">
        <a class="btn btn-primary btn-lg " href="clientProduit" role="button">retour</a>
    </p>

</div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
<?php
}
?>
<style>

</style>
