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
    require_once("view/concerts.php");
}

function showMovies()
{

    $audio="Standard";
    require_once "modele/movies.php";

    foreach ($listofmovies as $i => $movie) {
        if ($movie['title'] != "Last Christmas") {
            //unset($listofmovies[$i]); //on supprime le concert du tableau et pas la copie faite par foreach !
            $listofmovies[$i] = "salut";
        }
    }
    require_once "view/movies.php";
}

?>