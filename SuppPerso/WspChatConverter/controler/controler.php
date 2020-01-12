<?php
/**
 *  Projet: controler de WspChatConverter
 *  Filename: ICT-133-SRD
 *  Author: Samuel Roland
 *  Creation date: 20.12.2019
 */

function viewchat()
{
    require_once 'model/model.php';  //ajouter les données
    $data = getChatText(); //le contenu brut du fichier texte.

    //Traiter les données:
    $lastposition = 0;
    //Compter le nombres de lignes dans $data:
    $nblignes = substr_count($data, "[");   //on compte le nombre de msgs (chaque ligne de msg commence par '[')
    for ($i = 1; $i <= $nblignes; $i++) {   //pour toutes les lignes
        if ($i != $nblignes) {
            $ligne = substr($data, $lastposition, stripos($data, "[", $lastposition + 1) - $lastposition); //extrait la chaine entre les deux '['
        } else {    //si c'est la dernière ligne
            $ligne = substr($data, $lastposition); //extrait la chaine entre le dernier '[' et jusqu'à la fin,.
        }
        $lastposition = stripos($data, "[", $lastposition + 1);   //lastposition prend la position suivante
        //Séparer les données de la ligne:
        $time = substr($ligne, 1, 17);   //pour avoir le contenu entre [ et ] --> "01.12.19 09:37:48"
        $posstartauthor = 19 + 1;  //position départ de author
        $posstartmsg = stripos($ligne, ":", 19) + 2;
        $author = substr($ligne, $posstartauthor, $posstartmsg - $posstartauthor - 2);   //auteur du msg
        $msg = substr($ligne, $posstartmsg);    //pos début du msg jusqu'à fin de la ligne. //contenu du msg
        //Définir le type:
        if (stripos($msg, "Les messages que vous envoyez dans ce groupe sont protégés avec le chiffrement de bout en bout. Cliquez pour plus d'informations.") != -1) {
            $type = "SystemJaune";
        }
        if (stripos($msg, " intégré le groupe via un lien d'invitation") != -1) {
            $type = "SystemBleu";
        }
        if (stripos($msg, "+41 ** *** ** ** a ajouté +41 ** *** ** **") != -1 && count_chars($msg) == 42) {
            $type = "SystemBleu";
        }
        $filename = "";
        if (stripos($msg, "< pièce jointe : ") == 1 && stripos($msg, count_chars($msg) - 1) == ">") {
            $type = "file";
            $posfilename = stripos($msg, ":", $posstartmsg);
            $filename = substr($posfilename, stripos($msg, " ", $posfilename) - $posfilename);

            $filename .= ":" . getFilesTypewithext($filename);var_dump($filename);
        }

        //On enregistre les valeurs dans le tableau
        $chatdata[$i - 1]['time'] = $time;
        $chatdata[$i - 1]['author'] = $author;
        $chatdata[$i - 1]['msg'] = $msg;
        $chatdata[$i - 1]['type'] = $type;

    }

//Afficher les données:
    require_once 'view/viewchat.php';
}

function getFilesTypewithext($filename)
{
    $filesext = [
        $audiofiles = ["mp3, flac", "opus", "ogg", "m4a", "aiff"], //listes fichiers audios
        $picturefiles = ["jpg", "png", "gif", "svg", "tiff", "raw"],
        $videofiles = ["mp4", "mov", "avi", "mpg", "mpa"]
    ];

    $extension = substr(strripos($filename, ".") + 1, count_chars($filename));  //extension du fichier sans le point
    foreach ($filesext as $i => $typesfilepossible) {
        foreach ($typesfilepossible as $typeinrun) {
            if ($extension == $typeinrun) {
                switch ($i) {    //selon la collection d'extension c'est audio, images ou vidéos
                    case 0:
                        $typefile = "audio";
                        break;
                    case 1:
                        $typefile = "image";
                        break;
                    case 2:
                        $typefile = "video";
                        break;
                    default:
                        $typefile = "unknown";
                        break;
                }
            }
        }
    }

    return $typefile;
}

?>