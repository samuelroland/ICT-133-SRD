<?php
$title = "Accueil";
$content = "Contenu de la page $title";

if (isset($_GET['action'])){
    $action= $_GET['action'];
}else{
    $action = "home";
}


switch ($action){
    case "movies":
        $title = "Films";
        require_once "view/movies.php";
        break;
    case "concerts":
        $title = "Concerts";
        $content = "Listes des concerts";
        require_once "view/concerts.php";
        break;
    default:
        $title = "Home";
        $content = "Maison";
       require_once "view/home.php";
        break;
}
require_once 'gabarit.php';
?>
