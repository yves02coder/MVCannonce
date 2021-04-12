
<?php
/*require_once "../Model/database.php";
require_once "../View/connexionVendeur.php";*/
session_start();
//session_unset();
session_destroy();
header("Refresh:30;deconnexion");
require_once "../View/deconnexion.php";