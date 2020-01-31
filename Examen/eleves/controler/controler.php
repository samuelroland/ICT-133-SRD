<?php
/**
 *  Projet: Examen ICT-133
 *  File: page controler.php functions for logic
 *  Author: Samuel Roland SI-MI2A
 *  Creation date: 31.01.2020
 */

require_once 'model/model.php'; //fontions du modèle pour lecture et écriture des données.
require_once 'view/helpers.php';    //function d'aides pour générer du contenu.

function home()
{
    require_once 'view/home.php';
}

function login($username, $password, $avatar)
{
    if ($username == "PBA" && $password == "1234") {
        $_SESSION['login'] = $username; //on enregistre la session.

        //définir l'avatar:
        switch ($avatar) {
            case 1:
                $imgavatar = "gerard_menfin_avatar.png";
                break;
            case 2:
                $imgavatar = "lea_ricoverd_avatar.png";
                break;
            case 3:
                $imgavatar = "norma_leman_avatar.png";
                break;
            case 4:
                $imgavatar = "paul_hauchon_avatar.png";
                break;
        }
        $_SESSION['avatarimg'] = $imgavatar;    //sauver l'image dans la session.

        home(); //retour à la maison
    } else {
        //Erreur donc flashmessage:
        $_SESSION['flashmessage'] = "Erreur sur le mot de passe/utilisateur";
        require_once 'view/loginform.php';  //retour à la page de login pour retenter et afficher le flashmessage
    }

}

function logout()
{
    unset($_SESSION['login']);
    home();
}

function displayBooks()
{
    $listofBooks = getListBooks();  //récupérer les livres du fichiers json


//aucun traitement de données

    //On génére la vue des livres:
    require_once 'view/books.php';
}

?>