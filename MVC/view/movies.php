<?php
/**
 *  Projet: MVC page Movies
 *  Filename: ICT-133-SRD
 *  Author: Samuel Roland
 *  Creation date: 19.12.2019
 */
ob_start();


?>
    <h1>Liste des films</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Audio</th>
            <th>Prochaine séance</th>
        </tr>
        </thead>
        <tbody>
        <?php
        //entete du tableau:

        foreach ($listofmovies as $movie) {
            echo "<tr>";
            echo "<td>" . $movie['title'] . "</td>";
            echo "<td>" . $movie['audio'] . "</td>";
            echo "<td>" . $movie['showtime'] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>

    </table>
<?php
$content = ob_get_clean();
require_once "gabarit.php";
?>