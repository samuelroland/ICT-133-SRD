<?php

$title = "Accueil";
$content = "Contenu de la page $title";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "home";
}

require_once "controller/controller.php";

switch ($action) {

    case "concerts":
        $title = "Concerts";

        showConcerts();
        break;
    case "movies":
        $title = "Film";
        showMovies();
        break;
    case "selectmovies":
        $title = "choix film";
        showmoviesfilter();
        break;
    default:
        $title = "Home";
        $content = "Maison";
        require_once "view/home.php";
        break;
}

require_once 'gabarit.php';
?>
