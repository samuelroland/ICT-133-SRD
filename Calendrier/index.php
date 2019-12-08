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
$month = $_GET['month'];
$year = $_GET['year'];
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

$firstdaystartat = date("w", mktime(1, 1, 1, $month, 0, $year));//day of the week that is the 1 of the month
$firstdaystartat += 0;
if ($firstdaystartat == 0) {    //si c'est 0 donc dimanche on met sur 7
    $firstdaystartat = 7;
}

//Trouver le dernier jour du mois actuel:
$lastdaypossiblelastmonth = 31;
while (checkdate($monthbefore, $lastdaypossiblelastmonth, $year) != true) {
    $lastdaypossiblelastmonth--; //on décremente jusqu'a 28 puisque 28 est le jour le numéro le plus petit pour février
}


$lastdaypossiblethismonth = 31;
while (checkdate($month, $lastdaypossiblethismonth, $year) != true) {
    $lastdaypossiblethismonth--; //on décremente jusqu'a 28 puisque 28 est le jour le numéro le plus petit pour février
}

//Table of months:
//$listdays = array("Mo", "Tu", "We", "Thu", "Fr", "Sa", "Sun");
$month = date("F", mktime(0, 0, 0, $month, 1, 1000));


echo '<div class="month"><ul>';
echo "<li>$month<br>$year</li>";


echo "</div></ul>";

echo '<ul class="weekdays">';
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


echo '<ul class="days">';
for ($i = 1; $i <= $lastdaypossiblethismonth; $i++) {
    //echo $firstdaystartat;
    if ($firstdaystartat != 7) {
        while ($firstdaystartat != 0) {
            $daylastmonth = $lastdaypossiblelastmonth - $firstdaystartat + 1;
            $firstdaystartat -= 1;
            echo "<li class='lastmonth'>$daylastmonth</li>";
        }
    }

    if ($i == date("j", $now) && $month == date("F", $now) && $year == date("Y", $now)) {
        echo "<li class='thismonth'><span class='active'>$i</span></li>";
    } else {
        echo "<li class='thismonth'>$i</li>";
    }

}

echo '</ul>';
//Boutons mois suivants et précedents:


echo "<br><a href='index.php?month=$monthbefore&year=$yeartolast'><div class='button'>Mois précedent</div></a>";
echo "<br><a href='index.php?month=$monthafter&year=$yeartonext'><div class='button'>Mois suivant</div></a>";

?>

</body>
</html>