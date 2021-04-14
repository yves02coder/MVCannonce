<?php
require_once "../asset/template.php";
require_once "../Controller/showAjouter.php";
//var_dump($_FILES);
if (isset($_SESSION['connecter_vendeur']) && $_SESSION['connecter_vendeur'] === true){


?>


<table class="table" >
    <tbody class="fadeInDown">

    <form method="post" enctype="multipart/form-data">
        <tr class="table-primary">
            <th scope="row">NOM du Vendeur:</th>
            <td><input type="text" name="vendeur_id_produit" id="vendeur_id_produit" placeholder="<?=$_SESSION['connecter_vendeur']?>"></td>


        </tr>

    <tr class="table-primary">
        <th scope="row">NOM</th>
        <td><input type="text" name="nom_produit" id="nom_produit" ></td>


    </tr>
    <tr class="table-secondary">
        <th scope="row"><label for="image_produit">IMAGE</label></th>
        <td><input type="file" id="image_produit" name="image_produit" required></td>
    </tr>

    <tr class="table-success">
        <th scope="row">DESCRIPTION</th>
        <td><textarea name="description_produit" id="description_produit" cols="30" rows="10" required></textarea></td>
    </tr>

    <tr class="table-danger">
        <th scope="row">PRIX </th>
        <td><input type="number" name="prix_produit" id="prix_produit" required></td>

    </tr>

  <tr class="table-warning">
        <th scope="row">CATEGORIES</th>
        <td class="form-group"><label for="add"></label>
            <select name="categorie_produit" id="add" required>
                <option value="Informatique">Informatique</option>
                <option value="Chaussures">Chaussures</option>
                <option value="Meubles">Meubles</option>
                <option value="Sport">Sport</option>
                <option value="Deco-Maison">Deco-Maison</option>
                <option value="Electromenager">Electromenager</option>
                <option value="Vetement">Vetement</option>
                <option value="immobilier">immobilier</option>
                <option value="voiture">Voiture</option>
            </select>
        </td>

    </tr>

        <tr class="table-warning">
            <th scope="row">REGIONS</th>
            <td class="form-group"><label for="add"></label>
                <select name="id_produit_region" id="add" required>
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
            <button type="submit" name="ajouterproduit" class="btn btn-outline-success">Ajouter le produit</button>
        </tr>

</form>
    </tbody>
</table>
<?php
if(isset($_FILES['image_produit'])){
    $repertoire = "../asset/image/";
    $image_produit = $repertoire . basename($_FILES['image_produit']['name']);
    $_POST['image_produit'] =$image_produit;
    if(move_uploaded_file($_FILES['image_produit']['tmp_name'], $image_produit)){
        echo "<p class='alert alert-success'>Le fichier est valide et téléchargé avec succès !</p>";
    }else{
        echo "<p class='alert alert-danger'>Erreur lors du téléchargement de votre fichier !</p>";
    }
}else{
    echo "<p class='alert alert-danger'>Le fichier est invalide seul les format .png, .jpg, .bmp, .svg, .webp sont autorisé !</p>";
}


//if(isset($_FILES['image_produit'])) {

    // Vérifier si la méthode post est utilisée

    // vérifier qu'il y a un file dans $_FILES

    // vérification nom et autres

    // garde le nom ou générer de manière aléatoire / random

    // moveupload

//ajouter image
   /* $uploaddir = "asset/";
    $image_produit = $uploaddir . basename($_FILES['image_produit']['name']);
    $_POST['image_produit'] = $image_produit;

    if (move_uploaded_file($_FILES['image_produit']['tmp_name'], $image_produit)) {
        echo '<p class="alert-success">Le fichier est valide et à été téléchargé avec succès !</p>';
    } else {
        echo '<p class="alert-danger">Une erreur s\'est produite, le fichier n\'est pas valide !</p>';
    }
}*/

if (isset($_POST['ajouterproduit'])){
    getAjouter();
}
}
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