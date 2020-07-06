<?php
session_start();
var_dump($_POST);
echo $_POST["password"];
if($_POST["password"] == "2020"){
    $_SESSION ["id"] = $_POST["name"];
    setcookie("id",$_SESSION["id"]);
}

else {
    echo "Mauvais couple identifiant / Mot de passe";
    echo "<a href=\"connexion.php\">Page Connexion</a>";

}
?>
    <ul id="nav">
    <li><a href="mini-site-routing.php">Page Accueil</a></li>
