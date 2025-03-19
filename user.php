<?php
session_start();
if($_SESSION['nom']="" || $_SESSION['isLogIn']!="true") {
    die("la vérification a échoué");
}
echo "Bienvenue".$_SESSION['nom'];
if(isset($_COOKIE['mesPrefs'])) {
    $mesPrefs = unserialize($_COOKIE['mesPrefs']);
    echo"mes Préférences : animal".$mesPrefs['animal']."et la couleur ".$mesPrefs['couleur'];
    echo "<a href = edit.php>Editer</a>";
    echo "<a href = logout.php>Quitter</a>";
} else {
    echo "Pas de préférences";
    echo "<a href = edit.php>Ajouter une Prefs</a>";
    echo "<a href = logout.php>Logout Quitter</a>";
}




?>