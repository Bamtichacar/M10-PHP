<?php
// EXERCICE 2
/* setcookoie('color', $_POST['color'], "/");
setcookie('animal', $_POST['animal'],"/");
 */?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<h3>Exercice 2</h3>";
echo "<h4>Sur la page index.php, faire un lien vers une autre page infos.php. Il faudra afficher sur la deuxième page le contenu des variables nom, prenom et age grâce aux sessions. Ces variables auront été définies directement dans le code.</h4>";
// Définition des variables de session
$_SESSION['Nom'] = 'Toto';
$_SESSION['Prenom'] = 'JP';
$_SESSION['age'] = 18;


echo"Votre nom est : ".$_SESSION["Nom"]."<br> Votre prénom est : ".$_SESSION["Prenom"]."<br>Votre âge est : ".$_SESSION["age"]." ans <br>";
echo print_r ($_SESSION);





?>


</body>
</html>