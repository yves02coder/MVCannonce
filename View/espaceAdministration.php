<?php
//session_start();
require_once "../asset/template.php";
require_once "../Controller/showEspaceAdmin.php";
require_once "../Controller/showAllVendeur.php";
require_once "../Controller/showProduitByvendeur.php";
require_once "../Controller/showCategorie.php";
//require_once "../Controller/showDelete.php";


$tableAdmin = afficherTableAdmin();

if (isset($_SESSION['connecter_admin']) && $_SESSION['connecter_admin'] === true){


?>
        <div class="container " style="margin-left: 80%" >
            <a href="index.php" class="btn btn-outline-info" ><b>ajouter un admin</b></a>

        </div>
<h1 class="text-success text-center">ESPACE ADMINISTRATION</h1>
<h2 class="text-dark text-center ">BIENVENUE <?=$_SESSION['email_admin'] ?></h2>

<table class="table table-primary">
    <thead>
    <tr >
        <th>ID</th>
        <th>Email Admin</th>
        <th>Mot de passe Admin</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($tableAdmin as $admin) {
        ?>
        <tr >
            <td  class="bg-primary"><?= $admin['id_admin'] ?></td>
            <td class="bg-success"><?= $admin['email_admin'] ?></td>
            <td class="bg-warning"><?= $admin['password_admin'] ?></td>
            <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#supprimer_admin&id_suppr=<?= $admin['id_admin'] ?>">
                    Supprimer
                </button>

                <!-- Modal -->
                <div class="modal fade" id="supprimer_admin&id_suppr=<?= $admin['id_admin'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Supprimer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>ID = <?= $admin['id_admin'] ?></p>
                                <p>Email = <?= $admin['email_admin'] ?></p>
                                <p>Mot de passe = <?= $admin['password_admin'] ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <a href="supprimer_admin&id=<?= $admin['id_admin'] ?>" type="button"
                                   class="btn btn-primary"> suppression</a>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
    </div>
    <p></p>

<h1 class="text-danger text-center m-5">LISTE DES CATEGORIES ARTICLES ET COLLABORATEURS</h1>
    <table class="table">
    <thead>
    <tr>
        <th scope="col" class="text-secondary">COLLABORATEUR</th>
        <th scope="col" class="text-secondary">CATEGORIES</th>
       <th scope="col" class="text-success">ARTICLES</th>

    </tr>
    </thead>
    <h3 class="my-4 text-danger"></h3>

        <?php

        $categories =getProduitCategorie();
        ?>
    <?php foreach ($categories as $key => $value) : ?>
    <tbody>
    <tr>


      <td> <?= $value["nom_vendeur"] ?></td>
        <td> <b class="text-secondary"><?= $value["categorie_produit"] ?> </b></td>
        <td><img  src="~/<?= $value['image_produit'] ?>" class="img-fluid" alt="..." style="    width: 20%;">
            <b class="text-success"><?= $value["nom_produit"] ?> </b>
        </td>

<td class=" mr-3"> <button type="button" data-toggle="modal" class="button btn btn-danger"  data-target="#supprimer_produit&id=<?=$value['id_produit'] ?>">
                <b >  supprimer</b>
                <?= $value["nom_vendeur"] ?> </button></td>

    </tr>
<?php endforeach ?>
    </tbody>
    </table>
    <table class="table-hover table-dark">
       <!-- <thead>
        <tr>
            <th>ID</th>
            <th>Nom Vendeur</th>
            <th>Email vendeur</th>
            <th>Mot de passe vendeur</th>
            <th>Sexe Vendeur</th>
            <th>Numero de tel</th>
        </tr>
        </thead>-->
        <tbody>
        <?php
        $getvendeur=getAllVendeur();
        foreach ( $getvendeur as $admin) {
            ?>
            <tr>
                <td><?= $admin['id_vendeur'] ?></td>
                <td><?= $admin['nom_vendeur'] ?></td>
                <td><?= $admin['email_vendeur'] ?></td>
                <td><?= $admin['password_vendeur'] ?></td>
                <td><?= $admin['sexe_vendeur'] ?></td>
                <td><?= $admin['numero_tel_vendeur'] ?></td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#supprimer_admin&id_suppr=<?= $admin['id_admin'] ?>">
                        Supprimer
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="supprimer_admin&id_suppr=<?= $admin['id_admin'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Supprimer</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>ID = <?= $admin['id_admin'] ?></p>
                                    <p>Email = <?= $admin['email_admin'] ?></p>
                                    <p>Mot de passe = <?= $admin['password_admin'] ?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    <a href="supprimer_admin&id_suppr=<?= $admin['id_admin'] ?>" type="button"
                                       class="btn btn-primary"> suppression</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    </div>




<h1 class="text-center text-danger">VITRINE COLLABORATEUR</h1>
    <div class="container text-center">
    <div class="row">

        <?php
        $getproduit = getAdminView();
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

                                        <p><?=$row['description_produit'] ?></p>
                                        <p><?=$row['prix_produit'] ?></p>
                                        <p><?=$row['categorie_produit'] ?></p>
                                        <p><?=$row['nom_region'] ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a name="supp" type="submit" href="supp&id=<?= $row['id_produit'] ?>"
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
require_once "footer.php";