<?php
/**
 *  Projet: xxx
 *  Filename: page controller  Partie "C" de MVC pour toutes les thèmes: concerts et films
 *  Author: Samuel Roland
 *  Creation date: 20.12.2019
 */

function showConcerts()
{
    //prendre les données
    require_once "modele/concerts.php";

    //Logique: faire la logique avec les données
    unset($listofconcerts[5]);
    unset($listofconcerts[6]);
    unset($listofconcerts[7]);
    $listofconcerts[0] = ['band' => 'Concert de moi', 'date' => '1515-15-15'];


    foreach ($listofconcerts as $i => $concert) {
        if ($concert['date'] < date("Y-m-d")) {
            unset($listofconcerts[$i]); //on supprime le concert du tableau et pas la copie faite par foreach !
        }
    }

    //Afficher les données
    require_once "view/concerts.php";
}

function showMovies()
{
    require_once "modele/model.php";

    $audio = $_POST['audio'];
    $heuremin = $_POST['heuremin'];
//Changer la valeur de $audio pour correspondre au tableau.
    switch ($audio) {
        case "std":
            $audio = "Standard";
            break;
        case "dblFrench":
            $audio = "Doublé en français";
            break;
    }

    foreach ($listofmovies as $i => $movie) {
        if ($movie['audio'] != $audio || $movie['showtime'] < $heuremin) {
            unset($listofmovies[$i]); //on supprime le concert du tableau et pas la copie faite par foreach !

        }
    }
    require_once "view/model.php";
}

function showmoviesfilter()
{
    require_once "modele/model.php";
    require_once "view/moviesfilter.php";
}

?>