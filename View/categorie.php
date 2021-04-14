<?php
require_once "../asset/template.php";
require_once "../Controller/showCategorie.php";
require_once "../Controller/showDetail.php";
$categories =getProduitByCategorie();

?>
<link rel="stylesheet" href="../View/categorie.css">
<div class="container">
    <div class="row">
        <div class="col-8 overflow mt-2 mb-2" >
            <h1 class="">Voici la Liste de vos articles :</h1>
            <?php foreach ($categories as $key => $value) : ?>
                <!--<div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card mt-md-5" >-->
                <div class=""style="max-height: 90%; max-width: 60%" >
                    <div class="card-content align-center shadow-2dp card text-white bg-dark mb-3 ">
                        <p class="mb-2 text-white"><b class="text-success">cet article est vendu par: <?= $value["nom_vendeur"] ?> </b></p>
                        <div class="center-text card-header"> <?= $value["nom_produit"] ?> </div>
                        <div class="card-body">
                            <img  src="~/<?= $value['image_produit'] ?>" class="img-fluid" alt="...">
                            <h4 class="card-title"></h4>
                            <p class="card-text"> <?= substr($value["description_produit"], 0, 140) ?></p>
                        </div>
                        <div class="card-footer text-muted ">
                            <h5 class="mb-2 text-white"><?= $value["categorie_produit"] ?> </h5>
                            <h5 class="mb-2 text-white"><?= $value["prix_produit"] ?> </h5>
                            <h5 class="mb-2 text-white"><?= $value["nom_region"] ?> </h5>


                        </div>
                        <a href="modifier?id=<?= $value['id_produit'] ?>"
                           class="btn btn-success m-2 w3-button w3-black">update</a>
                    </div>

                </div>
            <?php endforeach ?>
        </div>

        <div class="col-4">
            <table class="table">
                <thead>
                <tr>

                    <th scope="col" class="text-primary">CATEGORIES</th>
                    <th scope="col" class="text-warning">ARTICLES</th>

                </tr>
                </thead>
                <h3 class="my-4 text-danger"></h3>
                <a href="add" class="text-secondary btn btn-outline-warning"> <?= $value["nom_vendeur"] ?> Insert</a>

            <?php foreach ($categories as $key => $value) : ?>
                <tbody>
            <tr>



               <td> <b class="text-primary"><?= $value["categorie_produit"] ?> </b></td>
                <td> <b class="text-warning"><?= $value["nom_produit"] ?> </b></td>


                <td class=" mr-3"> <button type="button" data-toggle="modal" class="button btn btn-danger"  data-target="#supprimer_produit&id=<?=$value['id_produit'] ?>">
                      <b >  supprimer</b>
                    <!-- --><?/*= $value["nom_vendeur"] */?> </button></td>

            </tr>
            <?php endforeach ?>
                <!--<div class="list-group" style="max-height:50%; max-width: 50%">
                    <a href="#" class="center-text list-group-item disabled shadow-2dp"> <?/*= $value["categorie_produit"] */?> </a>
                    <a href="#" class="center-text list-group-item disabled shadow-2dp"> <?/*= $value["nom_vendeur"] */?> </a>
                </div>-->
            <?php foreach ($categories as $key => $value) : ?>
            <div class="modal fade" role="dialog"  id="supprimer_produit&id=<?=$value['id_produit']  ?>"  tabindex="-1" aria-labelledby="supprimer_produit?id=<?=$value['id_produit'] ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"><?=$value['nom_produit'] ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h1><?=$value['nom_produit'] ?></h1>
                            <h3 class="card-title">Nom du vendeur:<b class="text-success"><?=$value['nom_vendeur'] ?></b></h3>
                            <p>numero produit:<?=$value['id_produit'] ?></p>
                            <img class="card-img-top img-fluid" src="~/<?=$value['image_produit']?> ?>"
                                 alt="" title="">
                           <!-- <?/*=$row['image_produit']*/?></p>-->
                            <p><?=$value['description_produit'] ?></p>
                            <p><?=$value['prix_produit'] ?></p>
                            <p><?=$value['categorie_produit'] ?></p>
                            <p><?=$value['nom_region'] ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a name="supprimer" type="submit" href="supprimer&id=<?= $value['id_produit'] ?>"
                               class="btn btn-outline-success m-2 w3-button w3-black button">supprimer</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>

        </tbody>
        </table>
        </div>
    </div>
</div>


<style>

</style>

