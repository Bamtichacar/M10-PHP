<?php
session_start();      // Pour Démarrer la session
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo "<h3>Exercice 1</h3>";
echo"<h4>Faire une page index.php permettant de donner à l'utilisateur : - son User Agent - son adresse ip - le nom du serveur</h4>";
echo $_SERVER['SERVER_NAME'];     // affiche le nom du serveur
echo "<br>";
echo $_SERVER['SERVER_ADDR'];     // affiche son adresse ip
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];   // affiche son user agent

echo "<h3>Exercice 2</h3>";
echo "<h4>Sur la page index.php, faire un lien vers une autre page infos.php. Il faudra afficher sur la deuxième page le contenu des variables nom, prenom et age grâce aux sessions. Ces variables auront été définies directement dans le code.</h4>";

echo "<a href=infos.php>Aller à la page d'infos</a>";
echo "<br>";
echo "<br>";

?>

<?php
echo "<h3>Exercice 3</h3>";
echo "<h4>Faire un formulaire qui permet de récupérer l'animal et la couleur que préfère l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.</h4>";
?>

<form method = "POST" action = "traite.form.php">
animal : <input name="animal"><br>
couleur : <input name = "couleur"><br>
</form>


<?php
echo "<h3>Exercice 4</h3>";
echo "<h4>Faire une page preferences.php qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches</h4>";

echo "Le cookie pour valeur ".$_COOKIE["animal"];


?>






</body>
</html>