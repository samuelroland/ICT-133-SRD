<?php
/**
 *  Projet: MVC page Home
 *  Filename: ICT-133-SRD
 *  Author: Samuel Roland
 *  Creation date: 19.12.2019
 */
ob_start();
?>
    <a href='?action=selectmovies'><img src="images/movies.jpg" alt="movies" height="250px"></a>
    <a href='?action=concerts'><img src="images/concerts.jpg" alt="movies" height="250px"></a>
<?php
$content = ob_get_clean();
require_once "gabarit.php";
?>