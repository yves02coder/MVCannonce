<?php
require_once "../asset/template.php";

?>
    <table class="table">
        <tbody class="fadeInDown">

        <form method="post" enctype="multipart/form-data" action="">

            <tr class="table-primary">
                <th scope="row">NOM</th>
                <label for="" value="nom_produit" >
                <td><input type="text" name="nom_produit"</td>
                </label>

            </tr>
            <tr class="table-secondary">
                <th scope="row"><label for="image_produit">IMAGE</label></th>
                <td><input type="file" id="image_produit" name="image_produit"  ></td>
            </tr>

            <tr class="table-success">
                <th scope="row">DESCRIPTION</th>
                <td><textarea name="description_produit" id="description_produit"   cols="30" rows="10" ></textarea></td>
            </tr>

            <tr class="table-danger">
                <th scope="row">PRIX </th>
                <td><input value="prix_produit" type="number" name="prix_produit" id="prix_produit"   ></td>

            </tr>

            <tr class="table-warning">
                <th scope="row">CATEGORIES</th>
                <td class="form-group"><label for="add"></label>
                    <select name="categorie_produit" id="add"  >
                        <option value="Vetement">Informatique</option>
                        <option value="Chaussures">Chaussures</option>
                        <option value="Meubles">Meubles</option>
                        <option value="Sport">Sport</option>
                        <option value="Deco-Maison">Deco-Maison</option>
                        <option value="Electromenager">Electromenager</option>
                        <option value="Vetement">Vetement</option>
                    </select>
                </td>

            </tr>
           <!-- <select name="id_produit_region" id=""></select>-->
            <tr class="table-warning">
                <th scope="row">REGIONS</th>
                <td class="form-group"><label for="add"></label>
                    <select name="id_produit_region" id="add" >
                        <option value="1">grand_est</option>
                        <option value="2">aquitaine</option>
                        <option value="3">auvergne</option>
                        <option value="4">normandie</option>
                        <option value="5">bourgogne_fc</option>
                        <option value="6">bretagne</option>
                        <option value="7">centre</option>
                        <option value="8">corse</option>
                        <option value="9">ile_france</option>
                        <option value="10">occitanie</option>
                        <option value="11">haut_france</option>
                        <option value="12">pays_loire</option>
                        <option value="13">paca</option>
                    </select>
                </td>

            </tr>
            <tr class="table-dark">
                <button type="submit" name="modifier" class="btn btn-outline-success">modifier le produit</button>
            </tr>

        </form>
        </tbody>
    </table>
<?php

if(isset($_FILES['image_produit'])) {
//ajouter image
    $uploaddir ="../asset/image";
    $image_produit = $uploaddir . basename($_FILES['image_produit']['name']);
    $_POST['image_produit'] = $image_produit;

    if (move_uploaded_file($_FILES['image_produit']['tmp_name'], $image_produit)) {
        echo '<p class="alert-success">Le fichier est valide et à été téléchargé avec succès !</p>';
    } else {
        echo '<p class="alert-danger">Une erreur s\'est produite, le fichier n\'est pas valide !</p>';
    }
}

if (isset($_POST['modifier'])){
    getProduit_Update($_POST['nom_produit'],$_POST['image_produit'] ,$_POST['description_produit'],$_POST['prix_produit'], $_POST['categorie_produit'] ,$_POST['id_produit_region'],$_GET['id']);
}


require_once "footer.php";
?>
<style>
    .fadeInDown {
        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown;
        -webkit-animation-duration: 2s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    @-webkit-keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    @keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    /* Simple CSS3 Fade-in Animation */
    @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
    @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
    @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

    .fadeIn {
        opacity:0;
        -webkit-animation:fadeIn ease-in 1;
        -moz-animation:fadeIn ease-in 1;
        animation:fadeIn ease-in 1;

        -webkit-animation-fill-mode:forwards;
        -moz-animation-fill-mode:forwards;
        animation-fill-mode:forwards;

        -webkit-animation-duration:1s;
        -moz-animation-duration:1s;
        animation-duration:1s;
    }

    .fadeIn.first {
        -webkit-animation-delay: 0.4s;
        -moz-animation-delay: 0.4s;
        animation-delay: 0.4s;
    }

    .fadeIn.second {
        -webkit-animation-delay: 0.6s;
        -moz-animation-delay: 0.6s;
        animation-delay: 0.6s;
    }

    .fadeIn.third {
        -webkit-animation-delay: 0.8s;
        -moz-animation-delay: 0.8s;
        animation-delay: 0.8s;
    }

    .fadeIn.fourth {
        -webkit-animation-delay: 1s;
        -moz-animation-delay: 1s;
        animation-delay: 1s;
    }
</style>
