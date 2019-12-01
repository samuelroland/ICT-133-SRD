<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil Exos ICT-133</title>
    <style>
        body{
            text-align: left;
            font-size: 1.5em;
            background-color: black;
            color: white;
            margin-left: 50px;
            font-family: Helvetica;
        }
        a{
            color: white;
            transition: 0.5s;
        }
        a:hover{
            color: blue;
            transition: 0.5s;

        }
        a:active{
            color: mediumvioletred;
            transition: 1s;
        }
        li{
            color: black;
            padding: 7px;
        }
    </style>
</head>
<body>
<h1>Accueil Exos ICT-133</h1>
<h4>Exercices automatiquement trouvés à la racine du serveur : </h4>

<?php
$filescollection = scandir($_SERVER['DOCUMENT_ROOT']);  //collection des éléments du dossier qui contient ce fichier.
$filetoexclude = array(".", "..", ".git", ".gitignore", ".idea", "index.php", "index.html", "images", "img", "js", "javascript","style", "css", "html", "pages", "doc","documentation", "readme.md", "README.md");  //fichier ou dossiers potentiels à exclure. tout le reste sont des dossiers des exercices...

function checkisafolder($folder, $filetoexclude)    //check si l'élément est un dossier, en regardant la liste des fichiers exclus.
{
    for ($i = 0; $i < count($filetoexclude); $i++) {
        if ($folder == $filetoexclude[$i]) {
            return false;   //retourne que folder n'est pas un dossier d'exercices.
        }
    }
    //une fois tout vérifié, si il n'est pas sorti de la fonction --> c'est un dossier d'exercices !
    return true;
}
function format($name){ //formater le nom en enlevant les séparateurs.
    //Si il trouve - ou _ ou . alors il remplace par un espace
    $name = str_replace("-", " ", $name);
    $name  = str_replace("_", " ", $name);
    $name  = str_replace(".", " ", $name);

    return $name;
}
foreach ($filescollection as $file) {   //Pour tous les fichiers trouvés à la racine.
    if (checkisafolder($file, $filetoexclude) == true) {//Si l'élément est un dossier d'exercices
        $formatedname= format($file);   //créer son nom formaté pour le nom de l'exercice à partir du nom du dossier sans les séparateurs.

        //le rajouter à la liste de liens vers les exercices:
        echo "<li><a href=\"".$file."/index.php\">".$formatedname."</a></li>";
    }
}

?>
</body>
</html>