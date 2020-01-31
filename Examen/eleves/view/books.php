<?php
/**
 *  Projet: Examen ICT-133
 *  File: page books.php view for list of books
 *  Author: Samuel Roland SI-MI2A
 *  Creation date: 31.01.2020
 */

ob_start();
$title = "Livres à disposition";
$description = "Voici les livres à vendre";

//début du tableau:
?>
    <table id="listofbooks" class="table table-striped">
        <thead>
        <tr>
            <th>Quantité</th>
            <th>Titre</th>
            <th>Etat</th>
            <th>Prix à l'unité</th>
        </tr>
        </thead>
        <tbody>


        <?php
        //pour chaque livre afficher les informations sur une ligne
        foreach ($listofBooks as $OneBook) {
            ?>
            <tr>
                <td><?= $OneBook['quantity'] ?></td>
                <td><?= $OneBook['title'] ?></td>
                <td><?= $OneBook['state'] ?></td>
                <td><?= $OneBook['price'] ?></td>
            </tr>

            <?php
        }

        ?>
        </tbody>

    </table>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>