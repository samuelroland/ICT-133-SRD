<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil Exos ICT-133</title>
</head>
<body>
<h1>Accueil Exos ICT-133</h1>
<h2><a href="Exo1_Traduction_C-vers-PHP/index.php">Exo1 Traduction</a></h2>
<h2><a href="Exo2_Dates/index.php">Exo2 Dates</a></h2>
<h2><a href="Exo-Liste-personnes/index.php">Exo liste personnes</a></h2>

<?php
$filescollection = scandir($_SERVER['DOCUMENT_ROOT']);  //collection des éléments du dossier qui contient ce fichier.
$filetoexclude = array(".", "..", ".git", ".gitignore", ".idea", "index.php", "index.html", "images", "img", "js", "javascript","style", "css", "html", "pages", "doc","documentation", "readme.md", "README.md");  //fichier ou dossiers potentiels à exclure. tout le reste sont des dossiers des exercices...

function checkisafolder($folder, $filetoexclude)
{
    for ($i = 0; $i < count($filetoexclude); $i++) {
        if ($folder == $filetoexclude[$i]) {
            return false;   //retourne que folder n'est pas un dossier d'exercices.
        }
    }
    //une fois tout vérifié, si il n'est pas sorti de la fonction --> c'est un dossier d'exercices !
    return true;
}

foreach ($filescollection as $file) {
    if (checkisafolder($file, $filetoexclude) == true) {//Si l'élément est un dossier d'exercices
        //le rajouter à la liste de liens vers les exercices:

        echo "<p>$file</p>";    //POUR LES TESTS à SUPPRIMER !
    }
}

?>
</body>
</html>