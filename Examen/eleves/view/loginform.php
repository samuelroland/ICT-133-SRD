<?php
/**
 *  Projet: Examen ICT-133
 *  File: page loginform.php view of the login form
 *  Author: Samuel Roland SI-MI2A
 *  Creation date: 31.01.2020
 */

$title = "Login";
$description = "Connectez-vous pour accéder à vos données";
ob_start();
?>

    <div class="container">
        <form class="form" method="POST" action="?action=login">
            <div class="row">
                <div class="">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="text-center">

                            <div class="col-md-4">
                                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
                                    <h4>Utilisateur</h4>
                                    <div class="icon">
                                        <i class="fa fa-user fa-3x"></i>
                                    </div>
                                    <div class="ficon">
                                        <input class="form-control" placeholder="login" type="text" name="username"
                                               required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
                                    <h4>Mot de passe</h4>
                                    <div class="icon">
                                        <i class="fa fa-ellipsis-h fa-3x"></i>
                                    </div>
                                    <div class="ficon">
                                        <input class="form-control" placeholder="mot de passe" type="password"
                                               name="password" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
                                    <h4>Avatar</h4>
                                    <div class="icon">
                                        <i class="fa  fa-3x"></i>
                                    </div>
                                    <div class="ficon">
                                        <input type="radio" name="avatar" value="1" required checked><img
                                                src="model/dataStorage/avatars/gerard_menfin_avatar.png" class="avatar"
                                                alt="">
                                        <input type="radio" name="avatar" value="2"><img
                                                src="model/dataStorage/avatars/lea_ricoverd_avatar.png" class="avatar"
                                                alt="">
                                        <br><input type="radio" name="avatar" value="3"><img
                                                src="model/dataStorage/avatars/norma_leman_avatar.png" class="avatar"
                                                alt="">
                                        <input type="radio" name="avatar" value="4"><img
                                                src="model/dataStorage/avatars/paul_hauchon_avatar.png" class="avatar"
                                                alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
                                    <div class="ficon">
                                        <input type="submit" class="btn btn-primary" value="Connexion">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>