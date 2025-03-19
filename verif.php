<?php
$nom = $_POST["nom"];
$password = $_POST["password"];
$url = 'user.php';
$userArray = array("user1", "user2", "user3", "user4", "user5");
$passArray = array("pass1", "pass2", "pass3", "pass4", "pass5");
$userLength = count($userArray);
for($i=0; $i<$userLength;$i++) {
    if($nom == $userArray[$i] && $password == $passArray[$i]) {
        session_start();
        $_SESSION["nom"] = $nom;
        $_SESSION["isLogIn"] = "true";
        header("location = $url");
    }
    echo"Pas bon !";
    echo"<a href = 'login.php'>Login</a>";
}
?>