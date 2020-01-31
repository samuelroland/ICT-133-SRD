<?php
/**
 *  Projet: Examen ICT-133
 *  File: page home.php view of the home
 *  Author: Samuel Roland SI-MI2A
 *  Creation date: 31.01.2020
 */

// tampon de flux stocké en mémoire
ob_start();
$title = "Accueil de SchoolBook2Sell";
$description = "Bienvenue !";

?>

    <div class="container">
        <div class="row">
            <div class="slider">
                <div class="img-responsive">
                    <ul class="bxslider">
                        <li><img src="img/02.jpg" alt=""/></li>
                        <li><img src="img/03.jpg" alt=""/></li>
                        <li><img src="img/01.jpg" alt=""/></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="text-center">
                    <h2>Revendez vos livres d'école</h2>
                    <p>Vendez les livres de vos études qui ne vous servent plus.<br> Un bon moyen pour financer les
                        années restantes <br> Pas de commission mais un soutien est bienvenu</p>
                </div>
                <hr>
            </div>
        </div>
    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";