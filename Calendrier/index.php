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
$daysoftheweek = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"]; //listes des jours de la semaine en francais.

//Prendre les valeurs de la querystring si elles sont assignées:
if (isset($_GET['month']) && isset($_GET['year'])) {
    $month = $_GET['month'];
    $year = $_GET['year'];
}

$now = time();  //take the date et time of now
$year += 0; //conversion string vers int
$month += 0; //conversion string vers int

//Données pour les boutons:
//Mois et année, suivants et précedents:
$monthbefore = $month - 1;  //mois avant
$monthafter = $month + 1;   //mois après
$yearbefore = $year - 1;    //année avant
$yearafter = $year + 1; //année après
$yeartonext = $year;    //année lors du clic sur mois suivant
$yeartolast = $year;    //année lors du clic sur mois précédent

//Si on est au mois 1 ou 12 alors on doit passer à l'année précèdente ou suivante:
if ($month == 1) {  //si c'est janvier
    $monthbefore = 12;
    $yeartolast = $yearbefore;
} else if ($month == 12) {  //si c'est décembre
    $monthafter = 1;
    $yeartonext = $yearafter;
}

//Changement du mois du format 01-12 au format January-December pour afficher
$month = date("F", mktime(1, 1, 1, $month, 1, 2000));   //prendre la mois avec une date fictive du bon mois.

//Fonctions:
/**
 * La fonction getDaysBefore retourne une chaîne de caractères qui représente les jours du
 * début de la semaine qui précèdent le premier jour du mois donné.
 * Cette chaîne peut donc être vide si le mois choisi commence un lundi.
 * Chaque jour est mis dans une balise <li> qui a la classe CSS 'discreet'
 *
 * Exemple:
 *     Le mois d'avril 2020 commence un mercredi, il est précédé du mois de mars, qui compte 31 jours.
 *     On doit donc voir le lundi 30 mars et le mardi 31 mars avant le mercredi 1er avril
 *     getDaysBefore(4,2020) retournera donc la chaîne:
 *
 *     <li class='discreet'>30</li><li class='discreet'>31</li>
 *
 * @param $month , numérique: le mois à afficher
 * @param $year , numérique: l'année du mois à afficher
 * @return $res , string : listes des jours d'avant
 */

function getDaysBefore($month, $year)
{
    //day of the week that is the 1 of the month and the year chosen
    $firstdaystartat = date("N", strtotime("$year-$month-01"));
    $firstdaystartat += 0;  //conversion implicite de chaine à entier.

    //Trouver le dernier jour du mois précédent:
    $lastdaypossiblelastmonth = date("t", strtotime("-1 month", strtotime("$year-$month-01")));
    $nbdayslastmonth = $firstdaystartat - 1; //nombre de jours affichés du mois d'avant.

    $res = "";
    //Afficher les jours du mois précédent si il y en a:
    for ($i = $nbdayslastmonth % 7; $i > 0; $i--) {
        $daytoprint = $lastdaypossiblelastmonth - $i + 1;   //pour trouver 28, 29, 30, 31, ...
        $res .= "<li class='othermonth'>$daytoprint</li>";
        $calendercontent[count($calendercontent) + 1] = $daytoprint;   //rajouter la valeur au contenu du calendrier
    }
    return $res;
}

/**
 * La fonction getDaysAfter retourne une chaîne de caractères qui représente les jours de
 * la fin de la semaine qui suivent le dernier jour du mois donné.
 * Cette chaîne peut donc être vide si le mois choisi se termine un dimanche.
 * Chaque jour est mis dans une balise <li> qui a la classe CSS 'discreet'
 *
 * Exemple:
 *     Le mois d'avril 2020 finit un jeudi.
 *     On doit donc voir le vendredi 1er mai, le samedi 2 mai et le dimanche 3 mai après le jeudi 30 avril
 *     getDaysAfter(4,2020) retournera donc la chaîne:
 *
 *     <li class='discreet'>1</li><li class='discreet'>2</li><li class='discreet'>3</li>
 *
 * @param $month , numérique: le mois à afficher
 * @param $year , numérique: l'année du mois à afficher
 * @return $res , string : listes des jours d'après
 */

function getDaysAfter($month, $year)
{
    //day of the week that is the 1 of the month and the year chosen
    $firstdaystartat = date("N", strtotime("$year-$month-01"));
    $firstdaystartat += 0;  //conversion implicite de chaine à entier.

    //Trouver le dernier jour du mois précédent:
    $lastdaypossiblelastmonth = date("t", strtotime("-1 month", strtotime("$year-$month-01")));
    $nbdayslastmonth = $firstdaystartat - 1; //nombre de jours affichés du mois d'avant.

    //Trouver le dernier jour du mois en cours:
    $lastdaypossiblethismonth = date("t", strtotime("$year-$month-01"));;

    $res = "";
    //Afficher les jours du mois suivant si il y en a:
    $nbdaysnextmonth = (7 - (($nbdayslastmonth + $lastdaypossiblethismonth) % 7)) % 7;  //nombre de case à remplir pour atteindre le bout de la dernière ligne du tableau.
    for ($j = 1; $j <= $nbdaysnextmonth; $j++) {
        $res .= "<li class='othermonth'>$j</li>";
        $calendercontent[count($calendercontent) + 1] = $j;   //rajouter la valeur au contenu du calendrier
    }
    return $res;
}

/**
 * La fonction getCalendarContent rend une chaîne de caractères qui représente tous les jours du mois en cours
 * Cette chaine ne peut pas être nulle
 * Chaque jour est mis dans une balise <li> qui a la classe CSS 'thismont'
 *
 * @param $month , numérique: le mois à afficher
 * @param $year , numérique: l'année du mois à afficher
 * @return $res , string : listes des jours du mois en cours
 */

function getCalendarContent($month, $year)
{
    $res = "";
    echo getDaysBefore($month, $year);
    //Trouver le dernier jour du mois en cours:
    $lastdaypossiblethismonth = date("t", strtotime("$year-$month-01"));;
    //Afficher les jours du mois courant:
    for ($i = 1; $i <= $lastdaypossiblethismonth; $i++) {
        if ($i == date("j") && $month == date("F") && $year == date("Y")) {
            echo "<li class='thismonth'><span class='active'>$i</span></li>";
        } else {
            echo "<li class='thismonth'>$i</li>";
        }
        $calendercontent[count($calendercontent) + 1] = $i;   //rajouter la valeur au contenu du calendrier
    }
    echo getDaysAfter($month, $year);
    return $res;
}

/**
 * La fonction getHeader rend une chaîne de caractères qui représente tous les jours du mois en cours
 * Cette chaine ne peut pas être nulle
 * Chaque jour est mis dans une balise <li> qui a la classe CSS 'thismont'
 *
 * @param $month , numérique: le mois à afficher
 * @param $year , numérique: l'année du mois à afficher
 * @return $res , string : listes des jours du mois en cours
 */
function getHeader($month, $year)
{
//Afficher le mois et l'année
    $res = "";
    $res .= '<div class="month"><ul>';
    $res .= "<li>$month<br>$year</li>";
    $res .= "</div></ul>";
    return $res;
}

//Début de la page:
echo getHeader($month, $year);

echo '<ul class="weekdays">';   //début des jours de la semaine
for ($i = 1; $i <= 7; $i++) {
    //Generate days of the week:
    //$dayinrun = date("l", mktime(1, 1, 1, 07, $i, 2019));  //juillet 2019 commence un lundi !
    $dayinrun = $daysoftheweek[$i - 1]; //prendre la liste des jours dans le tableau
    if ($i == date("N") && $month == date("F") && $year == date("Y")) {    //si la date c'est maintenant
        echo "<li><span class='active'>$dayinrun</span></li>";
    } else {
        echo "<li>$dayinrun</li>";
    }
}
echo '</ul>';

echo '<ul class="days">';   //début des jours du mois

echo getCalendarContent($month, $year);

echo '</ul>';   //fin de la liste du tableau.
//var_dump($calendercontent);   //observer la variable pour voir le contenu du tableau

//Boutons mois suivant et précedent:
echo "<br><a href='index.php?month=$monthbefore&year=$yeartolast'><div class='button'>Mois précedent</div></a>";
echo "<br><a href='index.php?month=$monthafter&year=$yeartonext'><div class='button'>Mois suivant</div></a>";
?>

</body>
</html>