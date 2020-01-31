<?php
/**
* Created by PhpStorm.
* User: Pascal.BENZONANA
* Date: 16.12.2019
* Time: 14:50
*/

// tampon de flux stocké en mémoire
ob_start();
$title="SchoolBook2Sell - Accueil";

?>

  <div class="container">
    <div class="row">
      <div class="slider">
        <div class="img-responsive">
          <ul class="bxslider">
            <li><img src="img/02.jpg" alt="" /></li>
            <li><img src="img/03.jpg" alt="" /></li>
            <li><img src="img/01.jpg" alt="" /></li>
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
          <p>Vendez les livres de vos études qui ne vous servent plus.<br> Un bon moyen pour financer les années restantes <br> Pas de commission mais un soutien est bienvenu</p>
        </div>
        <hr>
      </div>
    </div>
  </div>

  <?php
  $content = ob_get_clean();
  require "gabarit.php";