<?php
require_once "../Controller/showAllVendeur.php";
$getvendeur=getAllVendeur();
?>
<h1 class="text-danger text-center mt-5">TABLE DES COLLABORATEURS</h1>
 <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom Vendeur</th>
            <th>Email vendeur</th>
            <th>Mot de passe vendeur</th>
            <th>Sexe Vendeur</th>
            <th>Numero de tel</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($getvendeur as $admin) {
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
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#supprimer_admin&id_suppr=<?= $admin['id_vendeur'] ?>">
                        Supprimer
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="supprimer_vendeur&id_suppr=<?= $admin['id_vendeur'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Supprimer</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>ID = <?= $admin['id_vendeur'] ?></p>
                                    <p>Email = <?= $admin['email_vendeur'] ?></p>
                                    <p>Mot de passe = <?= $admin['password_vendeur'] ?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    <a href="supprimer_vendeur&id_suppr=<?= $admin['id_vendeur'] ?>" type="button"
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



