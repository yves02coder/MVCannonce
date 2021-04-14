<?php

require_once "../asset/template.php";
require_once "../Controller/showconnexionAdministrateur.php";

?>
<head>
    <link rel="stylesheet" href="connexion.css type="css"">
</head>
<button id="togg1" >Cacher connexion</button>
<div id="d1">
    <form action="" method="post">

        <h1 class="text-success text-center">Espace Administration</h1>
        <div class="wrapper fadeInDown" id="connexion ">
            <div id="formContent">
                <!-- Tabs Titles -->
                <h2 class="active"> connexion </h2>
                <h2 class="active"><a href="deconnexion" class="btn-outline-danger">deconnexion</a></h2>

                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="https://phoneky.co.uk/thumbs/wallpapers/p2/bollywood/29/3cc8557712661091.jpg" id="icon" alt="User Icon" />
                </div>

                <!-- Login Form -->
                <form>
                    <label for="email_admin"></label><input type="text" id="email_admin" class="fadeIn second " size="5" name="email_admin" placeholder="Email" required>
                    <p></p><input type="password" id="password_admin" class="fadeIn third" name="password_admin" placeholder="password" required>
                    <input type="checkbox" onclick="myFunction()">Show Password
                    <!--<div class="text-center">
                        <button name="connexion" type="submit" class="btn btn-success m-4 ">connecter</button>
                    </div>-->
                    <button type="submit" name="connexion_administrateur" class="fadeIn fourth mt-2" value="connecter">connecter</button>

                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <img src="asset/image/poto.png" alt="" style="width: 100px">
                </div>

            </div>
        </div>

    </form>
</div>


<?php
if(isset($_POST['connexion_administrateur'])){
    // echo '<script>alert("Bienvenue  ")</script>';

    /*connecterAdministrateur();*/
    require_once "../View/espaceAdministration.php";
}
?>
<script>
    function myFunction() {
        var x = document.getElementById("password_admin");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

</script>
<script>let togg1 = document.getElementById("togg1");
    let togg2 = document.getElementById("togg2");
    let d1 = document.getElementById("d1");
    let d2 = document.getElementById("d2");
    togg1.addEventListener("click", () => {
        if(getComputedStyle(d1).display != "none"){
            d1.style.display = "none";
        } else {
            d1.style.display = "block";
        }
    })

    function togg(){
        if(getComputedStyle(d2).display != "none"){
            d2.style.display = "none";
        } else {
            d2.style.display = "block";
        }
    };
    togg2.onclick = togg;
</script>