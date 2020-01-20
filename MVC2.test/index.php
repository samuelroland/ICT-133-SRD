<?php

$title = "Accueil";
$content = "Contenu de la page $title";

$timewanted = $_GET['timegiven'];

require_once "controller/controller.php";

displayMeteo($timewanted);

?>
