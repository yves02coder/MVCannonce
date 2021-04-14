<?php
require_once "../Controller/RegionsControlleur.php";

?>
<h1 class="alert-primary mt-3 p-3 text-center text-info">Annonces de la region :</h1>
<div class="row">

    <?php

    foreach ($annonceParRegion  as $row){
    ?>
    <div class="col-md-4 col-sm-12 mt-3">
        <div class="card"">
        <img width="10%" class="card-img-top img-fluid" src="~/<?= $row['image_produit'] ?>" alt="" title="">
        <div class="card-body">
            <h5 class="card-title"><b>Produits : </b><br /><?= $row['nom_produit'] ?></h5>
            <p class="card-text"><?= $row['description_produit'] ?></p>
            <p><b>Prix : </b><?= $row['prix_produit'] ?> €</p>
            <p><b>Catégorie : </b><?= $row['categorie_produit'] ?></p>
            <p><b>Nom du vendeur : </b><?= $row['nom_vendeur'] ?></p>
            <p><b>Région du vendeur : </b><?= $row['nom_region'] ?></p>

           <?php
           if(isset($_SESSION['connecter_utilisateur']) && $_SESSION['connecter_utilisateur'] === true ){
               ?>
                <a href="acheter&id=<?= $row['id_vendeur'] ?>" class="btn btn-info mt-3">Acheter</a>
                }else{
                ?>
                <a href="connexion_utilisateur&id=<?= $row['id_utilisateur'] ?>" class="btn btn-info mt-3">Acheter</a>
                <?php
           }
            ?>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success mt-3" data-toggle="modal" data-target="#numero&id=<?= $row['id_produit'] ?>">
                CONTACT
            </button>

            <!-- Modal -->
            <div class="modal fade" id="numero&id=<?= $row['id_produit'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">CONTACT VENDEUR</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <ul class="list-group active">
                                <li class="list-group-item">Email : <?= $row['email_utilisateur'] ?></li>
                                <li class="list-group-item">N° de téléphone : <?= $row['nom_utilisateur'] ?></li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>

            <a href="email_vendeur&id=<?= $row['id_utilisateur'] ?>" class="btn btn-primary mt-3">Message</a>

            <a target="_blank" href="pdf&id=<?= $row['id_produit'] ?>" class="btn btn-warning mt-3">Annonce en PDF</a>
        </div>
    </div>
</div>

<?php
}
?>
</div>
