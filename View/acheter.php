<?php

require_once "../Controller/showClientProduit.php";
$getachat=getProduitAchat();
foreach ($getachat as $achat){


?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="container rotateIn ">
        <h1 class="text-secondary">cet produit est vendu par: <?=$achat['nom_vendeur'] ?></h1>
<h1 class="text-success">Votre recapitulatif d'achat:<?/*=$_SESSION['email_client'] */?></h1>
<div class="jumbotron">
    <h2 class="display-4"><img src="../asset/image/poto.png" alt=""></h2>

    <p> <img class="card-img-top text-center " src="~/<?=$achat['image_produit']?> ?>"
             alt="" title="" style="width: 50%"></p>
    <p class="lead"><?=$achat['description_produit'] ?></p>
    <p class="text-primary text-center"><i class="fa fa-globe  fa-5x fa-spin" aria-hidden="true"></i>:<b style="font-size: 20px" class="text-danger"><?=$achat['nom_region'] ?></b></p>
    <p class="text-primary text-center"><i class="fa fa-phone fa-5x  " aria-hidden="true"></i>:<b style="font-size: 20px" class="text-warning"><?=$achat['numero_tel_vendeur'] ?></b></p>
    <hr class="my-4">
    <p>
        <a class="btn btn-primary btn-lg" href="clientProduit" role="button">retour</a>
    </p>
    <p><a href="connexionUtilisateur" class="btn btn-outline-danger">Connexion</a></p>
    <p><a href="inscriptionUtilisateur" class="btn btn-outline-warning">Inscription</a></p>
</div>
    </div>
<?php
}
?>
<style>
    .rotateIn {
        -webkit-animation-name: rotateIn;
        animation-name: rotateIn;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }
    @-webkit-keyframes rotateIn {
        0% {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: rotate3d(0, 0, 1, -200deg);
            transform: rotate3d(0, 0, 1, -200deg);
            opacity: 0;
        }
        100% {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: none;
            transform: none;
            opacity: 1;
        }
    }
    @keyframes rotateIn {
        0% {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: rotate3d(0, 0, 1, -200deg);
            transform: rotate3d(0, 0, 1, -200deg);
            opacity: 0;
        }
        100% {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: none;
            transform: none;
            opacity: 1;
        }
    }

</style>
