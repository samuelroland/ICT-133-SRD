<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exo Calendrier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
/**
 *  Projet: Calendrier exo de Moodle
 *  Repos: ICT-133-SRD
 *  Author: Samuel Roland
 *  Creation date: 05.12.2019
 */

//Get the data of the query string:

//If month and year are null take this value by default:
$month = 8;
$year = 2019;

if (isset($_GET['month']) && isset($_GET['year'])) {
    $month = $_GET['month'];
    $year = $_GET['year'];
}

$now = time();  //take the date et time of now
$year += 0;
$month += 0;

//Mois et année, suivants et précedents:
$monthbefore = $month - 1;  //mois avant
$monthafter = $month + 1;   //mois après
$yearbefore = $year - 1;    //année avant
$yearafter = $year + 1; //année après
$yeartonext = $year;    //année lors du clic sur mois suivant
$yeartolast = $year;    //année lors du clic sur mois précédent

//Si on est au moins 1 ou 12 alors on doit passer à l'année précèdente ou suivante:
if ($month == 1) {
    $monthbefore = 12;
    $monthafter = 2;
    $yeartolast = $yearbefore;
} else if ($month == 12) {
    $monthafter = 1;
    $monthbefore = 11;
    $yeartomonth = $yearafter;
    $yeartonext = $yearafter;
} else {
    $monthbefore = $month - 1;
    $monthafter = $month + 1;
    $yeartomonth = $year;
}

echo date("Y-M-D", strtotime("$year-$month-0"));
$firstdaystartat = date("w", strtotime("$year-$month-0"));//day of the week that is the 1 of the month
$firstdaystartat += 0;


//Trouver le dernier jour du mois actuel:
$lastdaypossiblelastmonth = 31; //par défaut c'est 31 et si c'est pas le cas, il sera réduit en dessous.
while (checkdate($monthbefore, $lastdaypossiblelastmonth, $year) != true) { //tant que la derniere date du mois précèdent n'est pas une date existante
    $lastdaypossiblelastmonth--; //on décremente jusqu'a 28 puisque 28 est le jour le numéro le plus petit (utile pour février)
}


$lastdaypossiblethismonth = 31;
while (checkdate($month, $lastdaypossiblethismonth, $year) != true) {
    $lastdaypossiblethismonth--; //on décremente jusqu'a 28 puisque 28 est le jour le numéro le plus petit pour février
}

//Changement du mois du format 01-12 au format January-December
$month = date("F", mktime(0, 0, 0, $month, 1, 1000));   //prendre la mois avec une date fictive du bon mois.

//Afficher le mois et l'année
echo '<div class="month"><ul>';
echo "<li>$month<br>$year</li>";
echo "</div></ul>";

echo '<ul class="weekdays">';   //début des jours de la semaine
for ($i = 1; $i <= 7; $i++) {
    //Generate days of the week:
    $dayinrun = date("l", mktime(1, 1, 1, 07, $i, 2019));  //juillet 2019 commence un lundi !

    if ($dayinrun == date("l", $now) && $month == date("F", $now) && $year == date("Y", $now)) {
        echo "<li><span class='active'>$dayinrun</span></li>";
    } else {
        echo "<li>$dayinrun</li>";
    }
}
echo '</ul>';
$nbdayslastmonth = $firstdaystartat; //nombre de jours affichés du mois d'avant.

echo '<ul class="days">';   //début des jours du mois

//Afficher les numéros des mois précédents si il y en a:
if ($firstdaystartat != 0) {    //Si le premier jour du mois est autre que lundi
    while ($firstdaystartat != 0) {
        $daylastmonth = $lastdaypossiblelastmonth - $firstdaystartat + 1;
        $firstdaystartat -= 1;
        echo "<li class='lastmonth'>$daylastmonth</li>";
    }
}

//Afficher les jours du mois courant:
for ($i = 1; $i <= $lastdaypossiblethismonth; $i++) {


    if ($i == date("j", $now) && $month == date("F", $now) && $year == date("Y", $now)) {
        echo "<li class='thismonth'><span class='active'>$i</span></li>";
    } else {
        echo "<li class='thismonth'>$i</li>";
    }
}

//Afficher les jours des mois d'après si il y en a:


echo '</ul>';
//Boutons mois suivants et précedents:
echo "<br><a href='index.php?month=$monthbefore&year=$yeartolast'><div class='button'>Mois précedent</div></a>";
echo "<br><a href='index.php?month=$monthafter&year=$yeartonext'><div class='button'>Mois suivant</div></a>";
?>

</body>
</html>