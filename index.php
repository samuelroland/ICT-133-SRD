<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil Exos ICT-133</title>
    <style>
        body {
            text-align: left;
            font-size: 1.5em;
            background-color: black;
            color: white;
            margin-left: 50px;
            font-family: Helvetica;
        }

        a {
            color: white;
            transition: 0.5s;
        }

        a:hover {
            color: blue;
            transition: 0.5s;

        }

        a:active {
            color: mediumvioletred;
            transition: 1s;
        }

        li {
            color: white;
            padding: 7px;
            list-style: none;
            padding-left: 5px;
        }

        img {
            height: 50px;
            width: 50px;
            background-color: white;
        }
        strong  {
            color: red;
        }

    </style>
</head>
<body>
<h1>Accueil Exos ICT-133</h1>


<?php
//uniquement si le script php se trouve à la racine du site.
//$filescollection = scandir($_SERVER['DOCUMENT_ROOT']);  //collection des éléments du dossier qui contient ce fichier.
$filetoexclude = array(".", "..", "internindex.php", ".git", ".gitignore", ".idea", "img-accueil", "index.php", "index.html", "images", "img", "js", "javascript", "style", "css", "html", "pages", "doc", "documentation", "readme.md", "README.md");  //fichier ou dossiers potentiels à exclure. tout le reste sont des dossiers des exercices...
//$pathofthescript = $_SERVER['SCRIPT_FILENAME'];
//$dossieractuel = substr($pathofthescript, 0, strripos($pathofthescript, "\\") + 1);

//TODO: prendre la valeur de path dans la querystring pour afficher un dossier d'exercices et appliquer a $dossieractuel
if (isset($_GET['path'])){
    $path= $_GET['path'];
    $path = str_replace(" ", "", $path);    //enleve les espaces au path
    //Afficher qu'on se trouve dans un dossier et pas à la racine du site:
    echo "<h4><strong>Position: </strong>/$path</h4>";

}else{
    echo "<h4><strong>Position: </strong>Racine du site</h4>";
}
$dossieractuel = $path;
$filescollection = scandir($dossieractuel);
$pathfolderlogo = "img-accueil\\folderlogo.png";
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

function format($name)
{ //formater le nom en enlevant les séparateurs.
    //Si il trouve - ou _ ou . alors il remplace par un espace
    $name = str_replace("-", " ", $name);
    $name = str_replace("_", " ", $name);
    $name = str_replace(".", " ", $name);

    return $name;
}

function integratecontent($folderinner, $filetoexclude) //intégre les fichiers php du dossier dans une sous-liste
{
    $dossierinrun= $GLOBALS['dossieractuel'];
    $content="";
    foreach (scandir($dossierinrun. $folderinner) as $file) {   //Pour tous les fichiers trouvés à la racine.
        if (checkisafolder($file, $filetoexclude) == true && (stripos($file, ".php") || stripos($file, ".html"))) {
            $content .= "<li ><a href='$dossierinrun$folderinner$file' >" . "-- " . $file . "</a></li>";
        }
    }
    return $content;
}

function containsphpfiles($folderinner, $filetoexclude)
{
    foreach (scandir($GLOBALS['dossieractuel'] . $folderinner) as $file) {   //Pour tous les fichiers trouvés à la racine.
        if (stripos($file, ".php") > -1 && $file != "index.php") {  //si le fichier est un fichier php mais pas un index.
            return true;
        }
    }

    return false;
}

foreach ($filescollection as $file) {   //Pour tous les fichiers trouvés à la racine.
    if (checkisafolder($file, $filetoexclude) == true) {//Si l'élément est un dossier d'exercices
        $formatedname = format($file);   //créer son nom formaté pour le nom de l'exercice à partir du nom du dossier sans les séparateurs.

        //Ajouter une image devant si contient d'autres exercices (donc si contient un index.php)
        if (file_exists($dossieractuel . $file . "\\index.php") == 1) { //si contient un index.php
            echo "<li><a href=\"" . $file . "/index.php\">" . "Exo: ".$formatedname . "</a></li>";  //lien direct sur index.php
        } else if (containsphpfiles("\\$file\\", $filetoexclude) == true) { //si contient d'autres fichiers php
            echo "<br><li>"."Exo: ". $formatedname ."<ul>". integratecontent("\\$file\\", $filetoexclude) . "</ul></li>";
        } else {    //si ne contient pas de php alors c'est un dossier contenant des exercices
            echo "<li><a href='?path=$path$file'><img src='$pathfolderlogo'>Dossier: $formatedname</a></li>";
        }

        //le rajouter à la liste de liens vers les exercices:
        //echo "<li><a href=\"" . $file . "/index.php\">" . $formatedname . "</a></li>";

    }
}

?>
</body>
</html>