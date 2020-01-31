<?php
/**
 *  Projet: Examen ICT-133
 *  File: page model.php functions for data
 *  Author: Samuel Roland SI-MI2A
 *  Creation date: 31.01.2020
 */

function getListBooks()
{
    return json_decode(file_get_contents("model/dataStorage/books2sell.json"), true);
}
?>