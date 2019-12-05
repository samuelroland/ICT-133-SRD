<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>"My Title"</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
/**
 *  Projet: Calendrier exo de Moodle
 *  Filename: ICT-133-SRD
 *  Author: Samuel Roland
 *  Creation date: 05.12.2019
 */

//Get the data of the query string:
$month = $_GET['month'];
$year = $_GET['year'];

//Table of months:
$listdays = array("Mo","Tu", "We", "Thu", "Fr", "Sa", "Su");


echo '<div class="month"><ul>';
echo "<li>$month<br>$year</li>";


echo "</div></ul>";

echo '<ul class="weekdays">';
for ($i=0;$i<count($listdays);$i++){
    if ($listdays[$i]==date("D")){
        echo "<li><span class='active'>$listdays[$i]</span></li>";
    }
    echo "<li>$listdays[$i]</li>";
}
    echo '</ul>';

echo '<ul class="days">';
for ($i=1;$i<=31;$i++){

    echo "<li>$i</li>";
}

    //<li><span class="active">10</span></li>

echo '</ul>';

?>

</body>
</html>