
<!doctype html>
<html lang="fr">
<head>

    <title>Exo2 Dates</title>
</head>
<body>
<h1>Exo Dates</h1>

<?php
/**
 *  Projet: xxx
 *  Filename: ICT-133-SRD
 *  Author: Samuel Roland
 *  Creation date: 28.11.2019
 */
date_default_timezone_set("Europe/Zurich");
//début de la liste ordonée:

//On choisit quel temps on veut prendre:
$timestamp = time();  //temps actuel avec la fonction time()

echo "<ol>";
echo "<li>".date('l d F Y', $timestamp)."</li>";
echo "<li>".date('M jS Y', $timestamp)."</li>";
echo "<li>".date('d/m/Y H:i a', $timestamp)."</li>";
echo "<li>".date('d M Y, H:i:s', $timestamp)."</li>";
echo "<li>".date('r', $timestamp)."</li>";
echo "</ol>";

?>
</body>
</html>

