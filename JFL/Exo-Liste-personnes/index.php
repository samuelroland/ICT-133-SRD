<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>SI-CMI2a</h1>
<h2>Eleves de la classe</h2>
<?php
// TODO : Ecrire le php qui remplace le html dans la balise ul ci-dessous
$tableau = array("kevin", "benoit", "Samuel", "Fabien", "David", "Miguel", "Marwan", "Simon", "Johnny", "Altin", "Gatien");
echo "<ul>";
//afficher la liste:

for ($i = 0; $i < count($tableau); $i++) {
    echo "<li>$tableau[$i]</li>";
}
echo "</ul>";
?>


</body>
</html>