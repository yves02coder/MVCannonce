<?php
require_once "../asset/template.php";
require_once "../Controller/showAdminViewController.php";
require_once "../Controller/showEspaceAdmin.php";
$getproduit = getAdminView();

?>

    <div class="container text-center">
        <div class="row">

            <?php
            foreach ($getproduit

                     as $row) {
                ?>
                <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


                <div class="w3-display-container w3-hover-opacity text-center" style="width:100%">-->
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card mt-md-5" >

                        <img  src="~/<?= $row['image_produit'] ?>" class="img-fluid" alt="...">

                        <h5 class="card-title"><b class="text-warning"><?= $row['nom_produit'] ?></b></h5>
                        <p class=""><?= $row['description_produit'] ?>.</p>
                        <p class="card-text"><small class="text-muted"> <b class="text-danger"><?= $row['prix_produit'] ?>
                                    €</b></small></p>
                        <p class="card-text"><?= $row['categorie_produit'] ?></p>
                        <p class="card-text"><i class="fa fa-globe  fa-5x fa-spin" aria-hidden="true"></i>: <?= $row['nom_region'] ?></p>
                        <h3 class="card-title"><b class="text-warning"><?= $row['nom_vendeur'] ?></b></h3>
                        <div class="w3-display-middle w3-display-hover w3-xlarge">




                            <!-- <a href="categorie" name="categorie" class="btn btn-outline-info">categories</a>-->
                            <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                modifier produit
                            </button>-->
                            <!--<a type="button" class="btn btn-primary" data-bs-toggle="modal" href="supprimer?id_supprimer=<?/*= $row['id_produit'] */?>">
                            supprimer produit
                        </a>-->
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

    <!----------------------------------------------MODAL SUPPRIMER----------------------------------------------->
<?php

?>
    <!--------------------------------MODAL------------------------------------------------------>
    <!-- Button trigger modal -->
    <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      supprimer produit
    </button>-->

    <!-- Modal -->


<?php

require_once "footer.php";
