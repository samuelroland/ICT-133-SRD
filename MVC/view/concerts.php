<?php
/**
 *  Projet: MVC page Concerts
 *  Filename: ICT-133-SRD
 *  Author: Samuel Roland
 *  Creation date: 19.12.2019
 */
ob_start();


?>
    <h1>Liste des concerts</h1>
    <ul>
        <?php

        foreach ($listofconcerts as $concert) {
            echo "<li>" . $concert['band'] . "<strong> le " . $concert['date'] . " </strong></li>";
        }
        ?>
    </ul>
<?php
$content = ob_get_clean();
require_once "gabarit.php";
?>