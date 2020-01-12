<?php
/**
 *  Projet: Gabarit de WspChatConverter
 *  Filename: ICT-133-SRD
 *  Author: Samuel Roland
 *  Creation date: 20.12.2019
 */

?>

<!DOCTYPE html>
<html class="js serviceworker adownload cssanimations csstransitions webp webp-alpha webp-animation webp-lossless"
      dir="LTR" loc="fr" lang="fr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>WspChatConverter</title>

    <link rel="stylesheet" href="WhatsApp_fichiers/cssm_qr.css">
    <style>
        #app, body, html {
            height: 100%;
            width: 100%;
            overflow: hidden;
            padding: 0;
            margin: 0
        }

        #app {
            position: absolute;
            top: 0;
            left: 0
        }

        #initial_startup, #startup {
            width: 100%;
            height: 100%;
            position: fixed;
            background-color: #f2f2f2;
            -moz-user-select: none;
            -webkit-user-select: none;
            display: flex;
            align-items: center;
            justify-content: center;
            display: -webkit-box;
            display: -webkit-flex;
            -webkit-align-items: center;
            -webkit-justify-content: center;
            flex-direction: column;
            -webkit-flex-direction: column
        }

        .spinner-container {
            -webkit-animation: rotate 2s linear infinite;
            animation: rotate 2s linear infinite;
            z-index: 2
        }

        .spinner-path {
            stroke-dasharray: 1, 150;
            stroke-dashoffset: 0;
            stroke: #acb9bf;
            stroke-linecap: round;
            -webkit-animation: dash 1.5s ease-in-out infinite;
            animation: dash 1.5s ease-in-out infinite
        }

        @keyframes rotate {
            100% {
                transform: rotate(360deg)
            }
        }

        @-webkit-keyframes rotate {
            100% {
                -webkit-transform: rotate(360deg)
            }
        }

        @keyframes dash {
            0% {
                stroke-dasharray: 1, 150;
                stroke-dashoffset: 0
            }
            50% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -35
            }
            100% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -124
            }
        }

        @-webkit-keyframes dash {
            0% {
                stroke-dasharray: 1, 150;
                stroke-dashoffset: 0
            }
            50% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -35
            }
            100% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -124
            }
        }

        .progress-container {
            width: 360px;
            position: fixed;
            padding-top: 120px;
            top: 50%;
            left: 50%;
            margin-left: -180px
        }

        progress {
            -webkit-appearance: none;
            appearance: none;
            width: 100%;
            height: 3px;
            border: none;
            margin: 0;
            color: #02d1a4;
            background-color: #e0e4e5
        }

        progress[value]::-webkit-progress-bar {
            background-color: #e0e4e5
        }

        progress[value]::-webkit-progress-value {
            background-color: #02d1a4
        }

        progress[value]::-moz-progress-bar {
            background-color: #02d1a4
        }</style>


    <link id="progress_script_/cssm_app.bb72a14fdeec5f541bc0504e3eedfa81.css" rel="stylesheet"
          href="WhatsApp_fichiers/cssm_app.css">
    <script id="progress_script_/app2.725d4d7804a9f4bf45c9.js" type="text/javascript" charset="utf-8"
            src="WhatsApp_fichiers/app2.js"></script>
    <style id="asset-style" type="text/css"></style>
    <script type="text/javascript" charset="utf-8" async="" src="WhatsApp_fichiers/fr_002.js"></script>
    <script type="text/javascript" charset="utf-8" async="" src="WhatsApp_fichiers/fr.js"></script>
    <script type="text/javascript" charset="utf-8" async="" src="WhatsApp_fichiers/svg.js"></script>
    <script type="text/javascript" charset="utf-8" async="" src="WhatsApp_fichiers/emoji.js"></script>
    <script type="text/javascript" charset="utf-8" async="" src="WhatsApp_fichiers/fr-CH.js"></script>
    <script type="text/javascript" charset="utf-8" async="" src="WhatsApp_fichiers/en.js"></script>
    <link id="favicon" rel="shortcut icon" type="image/png"
          href="https://web.whatsapp.com/img/favicon_c5088e888c97ad440a61d247596f88e5.png"
          src="/img/favicon_c5088e888c97ad440a61d247596f88e5.png">
    <script id="progress_script_/vendor1.15d83b58e8c21bb1df8c.js" type="text/javascript" charset="utf-8"
            src="WhatsApp_fichiers/vendor1.html"></script>
    <script id="progress_script_/vendor2.2f9bc4d78529b23e45d6.js" type="text/javascript" charset="utf-8"
            src="WhatsApp_fichiers/vendor2.html"></script>
    <script id="progress_script_/app.23ffa35bc714b063c767.js" type="text/javascript" charset="utf-8"
            src="WhatsApp_fichiers/app.html"></script>
</head>
<body class="web">
<div id="app" data-app2="/app2.725d4d7804a9f4bf45c9.js" data-app="/app.23ffa35bc714b063c767.js"
     data-vendor1="/vendor1.15d83b58e8c21bb1df8c.js" data-vendor2="/vendor2.2f9bc4d78529b23e45d6.js"
     data-app-size="2144234" data-vendor1-size="822752" data-vendor2-size="523364"
     data-cssm-app="/cssm_app.bb72a14fdeec5f541bc0504e3eedfa81.css">
<!-- contenu de l'application: -->
    <div class="_1FPJ- _39gtr app-wrapper-web">
        <div tabindex="-1" class="app _3fUe9 two">
            <div class="_2sTOw"></div>
            <div class="_37f_5">
                <div class="_3HZor _3kF8H"><span class="o_uNe"></span></div>
                <div class="_3HZor _2rI9W"><span class="o_uNe"></span></div>
                <div class="_3HZor _1C9rS"><span class="o_uNe"></span></div>
            </div>

            <div class="_3HZor _3kF8H">

            </div>
            <div class="_3HZor _2rI9W">
                <div id="main" class="NuujD">
                    <div class="fzCXy" data-asset-chat-background="true"></div>
                    <header class="_3fs0K">
                        <div class="_1SwuT" role="button">
                            <div class="_3RWII" style="height: 40px; width: 40px;"><img
                                        src="WhatsApp_fichiers/pp_003.jpg" draggable="false" class="jZhyM _13Xdg _F7Vk"
                                        style="visibility: visible;">
                                <div class="B9BIa"><span data-icon="default-user" class=""><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212"
                                                height="212"><path fill="#DFE5E7"
                                                                   d="M106.251.5C164.653.5 212 47.846 212 106.25S164.653 212 106.25 212C47.846 212 .5 164.654.5 106.25S47.846.5 106.251.5z"></path><g
                                                    fill="#FFF"><path
                                                        d="M173.561 171.615a62.767 62.767 0 0 0-2.065-2.955 67.7 67.7 0 0 0-2.608-3.299 70.112 70.112 0 0 0-3.184-3.527 71.097 71.097 0 0 0-5.924-5.47 72.458 72.458 0 0 0-10.204-7.026 75.2 75.2 0 0 0-5.98-3.055c-.062-.028-.118-.059-.18-.087-9.792-4.44-22.106-7.529-37.416-7.529s-27.624 3.089-37.416 7.529c-.338.153-.653.318-.985.474a75.37 75.37 0 0 0-6.229 3.298 72.589 72.589 0 0 0-9.15 6.395 71.243 71.243 0 0 0-5.924 5.47 70.064 70.064 0 0 0-3.184 3.527 67.142 67.142 0 0 0-2.609 3.299 63.292 63.292 0 0 0-2.065 2.955 56.33 56.33 0 0 0-1.447 2.324c-.033.056-.073.119-.104.174a47.92 47.92 0 0 0-1.07 1.926c-.559 1.068-.818 1.678-.818 1.678v.398c18.285 17.927 43.322 28.985 70.945 28.985 27.678 0 52.761-11.103 71.055-29.095v-.289s-.619-1.45-1.992-3.778a58.346 58.346 0 0 0-1.446-2.322zM106.002 125.5c2.645 0 5.212-.253 7.68-.737a38.272 38.272 0 0 0 3.624-.896 37.124 37.124 0 0 0 5.12-1.958 36.307 36.307 0 0 0 6.15-3.67 35.923 35.923 0 0 0 9.489-10.48 36.558 36.558 0 0 0 2.422-4.84 37.051 37.051 0 0 0 1.716-5.25c.299-1.208.542-2.443.725-3.701.275-1.887.417-3.827.417-5.811s-.142-3.925-.417-5.811a38.734 38.734 0 0 0-1.215-5.494 36.68 36.68 0 0 0-3.648-8.298 35.923 35.923 0 0 0-9.489-10.48 36.347 36.347 0 0 0-6.15-3.67 37.124 37.124 0 0 0-5.12-1.958 37.67 37.67 0 0 0-3.624-.896 39.875 39.875 0 0 0-7.68-.737c-21.162 0-37.345 16.183-37.345 37.345 0 21.159 16.183 37.342 37.345 37.342z"></path></g></svg></span>
                                </div>
                            </div>
                        </div>
                        <div class="_3V5x5" role="button">
                            <div class="_1lpto">
                                <div class="_19vo_"><span dir="auto" title="Tziix" class="_19RFN _1ovWX _F7Vk">Tziix</span>
                                </div>
                            </div>
                        </div>
                        <div class="_2kYeZ">
                            <div class="_3lq69">
                                <div class="_3j8Pd">
                                    <div role="button" title="Recherche..."><span data-icon="search-alt" class=""><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="#263238" fill-opacity=".5" d="M15.9 14.3H15l-.3-.3c1-1.1 1.6-2.7 1.6-4.3 0-3.7-3-6.7-6.7-6.7S3 6 3 9.7s3 6.7 6.7 6.7c1.6 0 3.2-.6 4.3-1.6l.3.3v.8l5.1 5.1 1.5-1.5-5-5.2zm-6.2 0c-2.6 0-4.6-2.1-4.6-4.6s2.1-4.6 4.6-4.6 4.6 2.1 4.6 4.6-2 4.6-4.6 4.6z"></path></svg></span>
                                    </div>
                                    <span></span></div>
                            </div>
                        </div>
                    </header>
                    <span class="_3SYkD"></span>
                    <div class="_3SYkD"><span></span></div>
                    <div class="_1_q7u">
                        <div class="_14Mgc copyable-area"><span></span><span></span>

                            <div class="_1_keJ">
                                <div class="_3-kxx"></div>
                                <div class="_1ays2">
                                    <!-- contenu de la discussion avec différents types de msgs-->
                                    <?= $chatcontent ?>

                                    <div class="FTBzM _4jEk2 message-in"><span></span>
                                        <div class="_1zGQT _2ugFP tail"><span class="tail-container"></span><span
                                                    class="tail-container highlight"></span>
                                            <div class="_2Wx_5 _3LG3B">
                                                <div class="-N6Gq">
                                                    <div class="copyable-text" data-pre-plain-text="[21:38, 17.12.2019] Altin Zili: ">
                                                        <div class="_12pGw" dir="ltr"><span dir="ltr" class="_F7Vk selectable-text invisible-space copyable-text"><span>Ok merci</span></span><span class="EopGb"></span></div></div><div class="_1RNhZ">
                                                        <div class="_3MYI2"><span class="_3fnHB" dir="auto">21:38</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 0px;" class="_3B8vA"></div>

                    <footer tabindex="-1" class="_1N6pS">


                    </footer>
                    <span></span></div>
            </div>
        </div>
    </div>
</div>
<div id="hard_expire_time" data-time="1591729710.771"></div>
<!--<script src="WhatsApp_fichiers/progress.js"></script>
<scripts src="/../.build/locales/fr.9ee56df3812068ebd027.js.map">
    <scripts src="/../.build/momentLocales/fr.1284dfddb77f6c4df280.js.map"></scripts>
</scripts>-->
<iframe id="mc-sidebar-container"
        style="top: 0px; padding: 0px; margin: 0px; z-index: 2147483646; position: fixed; border: medium none; opacity: 0; left: auto; right: 0px; display: block; max-width: none; transition: width 0s ease 0.4s, height 0s ease 0.4s, opacity 0.4s ease 0s, transform 0.4s ease 0s; transform: translate3d(400px, 0px, 0px); width: 400px; height: 0px;"></iframe>
<iframe id="mc-topbar-container"
        style="top: 0px; padding: 0px; margin: 0px; z-index: 2147483646; position: fixed; border: medium none; opacity: 0; left: 0px; display: block; max-height: none; transition: width 0s ease 0.4s, height 0s ease 0.4s, opacity 0.4s ease 0s, transform 0.4s ease 0s; transform: translate3d(0px, -50px, 0px); height: 50px; width: 0px;"></iframe>
<iframe id="mc-toast-container"
        style="bottom: 0px; right: 0px; padding: 0px; margin: 0px; z-index: 2147483640; position: fixed; border: medium none; opacity: 0; display: block; height: 0px; width: 0px;"></iframe>
<iframe id="mc-download-overlay-container"
        style="bottom: 0px; right: 0px; padding: 0px; margin: 0px; z-index: 2147483640; position: fixed; border: medium none; opacity: 0; display: block; height: 0px; width: 0px;"></iframe>

</body>
</html>
