<?php
/**
 *  Projet: Examen ICT-133
 *  File: page index.php
 *  Author: Samuel Roland SI-MI2A
 *  Creation date: 31.01.2020
 */
session_start();
require "controler/controler.php";  //prendre les fonctions du controleur.

extract($_POST);    //extraire $username, $password, $avatar pour le formulaire de login

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case "login":
            if (empty($username) == false && empty($password) == false && empty($avatar) == false) {
                login($username, $password, $avatar);
            } else {
                if (empty($_POST) == false) { //si il y a des données envoyées (mais pas tout), alors on a pas tout recu. erreur données manquantes:
                    $_SESSION['flashmessage'] = "Données de connexion manquantes ...";
                }   //sinon c'est normal car on demande le formulaire de connexion:
                require_once 'view/loginform.php';
            }
            break;
        case "logout":
            logout();
            break;
        case "books":
            displayBooks();
            break;
        default :
            home();
            break;
    }
} else {
    home();
}