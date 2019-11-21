<!doctype html>
<html lang="fr">
<!-- -->
<head>
    <meta charset="UTF-8">
    <title>Exo1 Traduction C vers PHP</title>
</head>
<body>
<?php
//Initialiser les valeurs:
$value = 20;
$step = 3;
echo "<h1>Exo1 Traduction C vers PHP</h1>";
echo "<ul>";    //créer une liste
for ($i = 0; $i < 10; $i++) {

    echo "<li>";    //créer un élément de la liste
    if ($value >=30){   //si supérieur à 30 afficher sa valeur.
        echo "le nombre vaut $value";
    }else{  //sinon afficher trop petit
        echo "nombre trop petit";
    }
    echo "</li>";   //fermer un élément de la liste

    $value += $step;   //incrémenter de 3 la value:
}

echo "</ul>";   //fermer la liste

?>

</body>
</html>

