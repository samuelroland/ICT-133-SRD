<?php
require_once 'modele/model.php';     //on a besoin de données

function home()
{
    $news = getNews();
    require_once 'view/home.php';
}

function displayMeteo($time)
{
    $data = getMeteoData();    //recevoir les données (fonction du model)  
//Traitement de données: 
    foreach ($data as $ReleveDeMeteo) {  //prendre chaque relevé de météo 
        if (strtotime($ReleveDeMeteo['date']) > strtotime($time)) {  //si le relevé = date future, --> c'est une erreur -> rend la valeur nulle. pour ne pas l'afficher
            unset($ReleveDeMeteo);  //supprimer le relevé de météo 
        }
    }
    require_once 'view/meteo.php';  //on peut maintenant afficher les données. Pas de fonction car la page est dédiée à afficher les données des relevés.
}

?>