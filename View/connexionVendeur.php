<?php

require_once "../asset/template.php";
require_once "../Controller/showconnexionVendeur.php";

?>



<button id="togg1" >Cacher connexion</button>
<div id="d1">
    <form action="" method="post">

        <h1 class="text-center">Connexion des collaborateurs</h1>
        <div class="wrapper fadeInDown" id="connexion ">
            <div id="formContent">
                <!-- Tabs Titles -->
                <h2 class="active"> connexion </h2>
                <h2 class="active"><a href="deconnexion" class="btn-outline-danger">deconnexion</a></h2>

                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="https://fr.iwall365.com/iPhoneWallpaper/m/1307/Avatar-blue-girl_iPhone_m.jpg" id="icon" alt="User Icon" />
                </div>

                <!-- Login Form -->
                <form>
                    <label for="email_vendeur">email</label><input type="text" id="email_vendeur" class="fadeIn second " size="5" name="email_vendeur" placeholder="Email" required>
                    <p></p><input type="password" id="password_vendeur" class="fadeIn third" name="password_vendeur" placeholder="password" required>
                    <input type="checkbox" onclick="myFunction()">Show Password

                    <!--<div class="text-center">
                        <button name="connexion" type="submit" class="btn btn-success m-4 ">connecter</button>
                    </div>-->
                    <p><button type="submit" name="connexion" class="fadeIn fourth mt-2" value="connecter">connecter</button></p>

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

if (isset($_POST['connexion'])) {
    getConnexion();
}
?>
<script>
    function myFunction() {
        var x = document.getElementById("password_vendeur");
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
