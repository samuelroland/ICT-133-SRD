<?php
function getNews()
{
    return json_decode(file_get_contents("model/dataStorage/news.json"), true);
}

function getMeteoData()
{
    //Récupérer les données:
    return json_decode(file_get_contents("modele/meteodata.json"), true);
}

?>