<?php
/**
 *  Projet: index de WspChatConverter
 *  Filename: ICT-133-SRD
 *  Author: Samuel Roland
 *  Creation date: 20.12.2019
 */

require_once "controler/controler.php";
$title = "Accueil";
$content = "Contenu de la page $title";
$action = "";
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

switch ($action) {
    default:
        $title = "view chat";
        viewchat();
        break;
    case "home":
        $title = "Home";
        break;
}
?>