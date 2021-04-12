<?php
require_once "../Controller/showconnexionVendeur.php";
require_once "../Controller/showProduitByvendeur.php";

$getvendeur=getByvendeur();
if (isset($_SESSION['connecter_vendeur']) && $_SESSION['connecter_vendeur'] === true){
?>

<div class="container text-center">
    <div class="row">

        <?php

        foreach ($getvendeur as $row) {
            ?>

            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card mt-md-5" >
                    <p class=""><?= $row['id_vendeur'] ?>.</p>
                    <img  src="~/<?= $row['image_produit'] ?>" class="img-fluid" alt="...">

                    <h5 class="card-title"><b class="text-warning"><?= $row['nom_produit'] ?></b></h5>
                    <p class=""><?= $row['description_produit'] ?>.</p>
                    <p class="card-text"><small class="text-muted"> <b class="text-danger"><?= $row['prix_produit'] ?>
                                €</b></small></p>
                    <p class="card-text"><?= $row['categorie_produit'] ?></p>
                    <p class="card-text"><i class="fa fa-globe  fa-5x fa-spin" aria-hidden="true"></i>: <?= $row['nom_region'] ?></p>
                    <h3 class="card-title"><b class="text-warning"><?= $row['nom_vendeur'] ?></b></h3>

                    <h3 class="card-title"><b class="text-warning"><?= $row['numero_tel_vendeur'] ?></b></h3>
                    <h3 class="card-title"><b class="text-warning"><?= $row['sexe_vendeur'] ?></b></h3>
                    <h3 class="card-title"><b class="text-warning"><?= $row['email_vendeur'] ?></b></h3>
                    <div class="w3-display-middle w3-display-hover w3-xlarge">





                        <button type="button" data-toggle="modal" class="btn btn-primary"  data-target="#supprimer_produit&id=<?=$row['id_produit'] ?>">
                            supprimer produit
                        </button>



                        <div class="modal fade" role="dialog"  id="supprimer_produit&id=<?=$row['id_produit']  ?>"  tabindex="-1" aria-labelledby="supprimer_produit?id=<?=$row['id_produit'] ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel"><?=$row['nom_produit'] ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h1><?=$row['nom_produit'] ?></h1>
                                        <h3 class="card-title">Nom du vendeur:<b class="text-success"><?= $row['nom_vendeur'] ?></b></h3>
                                        <p>numero produit:<?=$row['id_produit'] ?></p>
                                        <img class="card-img-top img-fluid" src="~/<?=$row['image_produit']?> ?>"
                                             alt="" title="">
                                        <?=$row['image_produit']?></p>
                                        <p><?=$row['description_produit'] ?></p>
                                        <p><?=$row['prix_produit'] ?></p>
                                        <p><?=$row['categorie_produit'] ?></p>
                                        <p><?=$row['nom_region'] ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a name="supprimer" type="submit" href="supprimer&id=<?= $row['id_produit'] ?>"
                                           class="btn btn-outline-success m-2 w3-button w3-black">supprimer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }
        ?>
    </div>
</div>

<?php
}