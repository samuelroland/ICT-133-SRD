<?php
ob_start();
$title = "Swissmeteo – pour le " . date("d:m:y", strtotime($timewanted));

foreach ($data as $ReleveDeMeteo) {  //prendre chaque relevé de météo 
    ?>
    <h1>Relevé le <?= date("d.m.Y", strtotime($ReleveDeMeteo['date'])) ?></h1>
    <h2>Pression: <?= $ReleveDeMeteo['pression'] ?></h2>
    <h2>Humidité: <?= $ReleveDeMeteo['humidity'] ?></h2>
    <?php
}
$content = ob_get_clean();
require_once "gabarit.php";
?>