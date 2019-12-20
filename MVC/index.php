<?php

$title = "Accueil";
$content = "Contenu de la page $title";

if (isset($_GET['action'])){
    $action= $_GET['action'];
}else{
    $action = "home";
}

if (isset($_GET['audio'])){
    $audio= $_GET['audio'];
}else{
    $audio = "Standard";
}
require_once "controller/controller.php";

switch ($action){
    case "movies":
        $title = "Films";
        require_once "view/movies.php";
        break;
    case "concerts":
        $title = "Concerts";
        $content = "Listes des concerts";
        showConcerts();
        break;
    default:
        $title = "Home";
        $content = "Maison";
       require_once "view/home.php";
        break;
}
require_once 'gabarit.php';
?>
