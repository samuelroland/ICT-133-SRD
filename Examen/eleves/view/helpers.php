<?php
/**
 *  Projet: Examen ICT-133
 *  File: page helpers.php functions for help generate content
 *  Author: Samuel Roland SI-MI2A
 *  Creation date: 31.01.2020
 */

function flashMessage()
{
    ob_start();
    if (isset($_SESSION['flashmessage'])) {
        echo "<p class='alert bg-danger'>" . $_SESSION['flashmessage'] . "</p>";
        unset($_SESSION['flashmessage']);
    }
    $res = ob_get_clean();
    return $res;
}

?>