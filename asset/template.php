<?php
$content="";
$title="";

?>
<!doctype html>
<html lang="en">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">-->
    <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand"  > <img src="asset/image/poto.png" style="width: 40%"></a>
            <button
                    class="navbar-toggler"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="clientProduit"><b>ARTICLE</b></a>
                    </li>
                   <!-- <li class="nav-item">
                        <a class="nav-link" href="inscription"><b>INSCRIPTION</b></a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="connexionVendeur" name="connexionvendeur"><b>CONNEXION</b></a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="deconnexion" ><b>DECONNEXION</b></a>
                    </li>
                </ul>


                <form class="d-flex input-group w-auto m-2" action="recherche">
                    <input name="recherche" type="search" placeholder="rechercher"/>
                    <button name="rechercher"
                            class="btn btn-warning"
                            type="submit"
                            data-mdb-ripple-color="dark"
                    >
                       rechercher
                    </button>
                </form>
            </div>
            </div>
        </div><!--
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
-->
    </nav>



</html>

<?php

if (isset($_POST['rechercher'])){
    FoundProduit();
}
/*if (isset($_POST['categorie_recherche'])){
   require_once "../View/ALLcategorie.php";
}*/

if (isset($_POST['connexionvendeur'])) {
    echo '<script>alert("cet espace est reservé aux collaborateur")</script>';

    require_once "../View/connexionVendeur.php";

}
