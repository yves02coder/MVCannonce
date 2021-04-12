<?php
ob_start();
require_once "../Controller/showClientProduit.php";

$getproduit = getAllproduitClient();
$title="clientProduit";
?>

    <div class="container text-center">
        <div class="row">

            <?php
            foreach ($getproduit

                     as $row) {
                ?>

                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card mt-md-5" >

                        <img  src="~/<?= $row['image_produit'] ?>" class="img-fluid" alt="...">

                        <h5 class="card-title"><b class="text-warning"><?= $row['nom_produit'] ?></b></h5>
                        <p class=""><?= $row['description_produit'] ?>.</p>
                        <p class="card-text"><small class="text-muted"> <b class="text-danger"><?= $row['prix_produit'] ?>
                                    €</b></small></p>
                        <p class="card-text"><?= $row['categorie_produit'] ?></p>
                        <p class="card-text"><i class="fa fa-globe  fa-2x fa-spin" aria-hidden="true"></i><b><?= $row['nom_region'] ?></b></p>

                        <div class="w3-display-middle w3-display-hover w3-xlarge">


                            <button type="button" data-toggle="modal" class="btn btn-primary"  data-target="#supprimer_produit&id=<?=$row['id_produit'] ?>">
                                Payer le produit
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
                                            <p class="w3-text-dark-gray"><b>l'article est vendu par:<?= $row['nom_vendeur'] ?></b></p>
<!--                                            <p class="text-danger"><b><i class="fa fa-envelope-o" aria-hidden="true"></i>:<?/*= $row['email_utilisateur'] */?></b></p>
-->                                            <h1><?=$row['nom_produit'] ?></h1>
                                            <p>numero produit:<?=$row['id_produit'] ?></p>
                                            <img class="card-img-top img-fluid" src="~/<?=$row['image_produit']?> ?>"
                                                 alt="" title="">
                                            <?/*=$row['image_produit']*/?><!--</p>-->
                                            <p><?=$row['description_produit'] ?></p>
                                            <p><?=$row['prix_produit'] ?></p>
                                            <p><?=$row['categorie_produit'] ?></p>
                                            <p><?=$row['id_produit_region'] ?></p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a name="acheter" type="submit" href="acheter&id=<?= $row['id_produit'] ?>"
                                               class="btn btn-outline-success m-2 w3-button w3-black ">Payer</a>
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

    <!----------------------------------------------MODAL SUPPRIMER----------------------------------------------->


?>
    <!--------------------------------MODAL------------------------------------------------------>
    <!-- Button trigger modal -->
    <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      supprimer produit
    </button>-->

    <!-- Modal -->

<?php

require_once "footer.php";
