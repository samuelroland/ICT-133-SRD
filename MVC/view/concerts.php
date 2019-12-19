<?php
/**
 *  Projet: MVC page Concerts
 *  Filename: ICT-133-SRD
 *  Author: Samuel Roland
 *  Creation date: 19.12.2019
 */
ob_start();

$listofconcerts = [
    ['band' => 'MARZELLA', 'date' => '2019-12-15'],
    ['band' => 'MICHELLE DAVID & THE GOSPEL SESSIONS', 'date' => '2019-12-16'],
    ['band' => 'PENGUIN CAFE', 'date' => '2020-01-18'],
    ['band' => 'FÉFÉ & LEEROY', 'date' => '2020-01-24'],
    ['band' => 'LIDO REVIVAL', 'date' => '2020-01-25'],
    ['band' => 'KEB’ MO’', 'date' => '2020-02-04'],
    ['band' => 'VOYOU + MÉTÉO MIRAGE', 'date' => '2020-02-06'],
    ['band' => 'TRYO', 'date' => '2020-02-07'],
    ['band' => 'OFENBACH (LIVE)', 'date' => '2020-02-08'],
    ['band' => 'STEREOPHONICS', 'date' => '2020-02-09'],
    ['band' => 'CORNEILLE', 'date' => '2020-02-12'],
    ['band' => 'THE GROWLERS', 'date' => '2020-02-13'],
    ['band' => 'DRAGONFORCE', 'date' => '2020-02-16'],
    ['band' => 'BADNAIY', 'date' => '2020-02-20'],
    ['band' => 'BROKEN BACK', 'date' => '2020-02-29'],
    ['band' => 'PATRICK WATSON', 'date' => '2020-03-04']
];
?>
<h1>Liste des concerts</h1>
<ul>
    <?php

    foreach ($listofconcerts as $concert){
        echo   "<li>".$concert['band'] ."<strong> le ".$concert['date']." </strong></li>";
    }
    ?>
</ul>
<?php
$content = ob_get_clean();
?>