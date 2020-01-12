<?php
/**
 *  Projet: fonctions du modèle de WspChatConverter
 *  Filename: ICT-133-SRD
 *  Author: Samuel Roland
 *  Creation date: 20.12.2019
 */
function getChatText()
{
    $data = file_get_contents("model/chat.txt");
    return $data;
}


?>