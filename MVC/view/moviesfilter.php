<?php
/**
 *  Projet: MVC page Home
 *  Filename: ICT-133-SRD
 *  Author: Samuel Roland
 *  Creation date: 19.12.2019
 */
ob_start();
?>
<h1>Choix de la liste des films</h1>
    <form action="/index.php?action=movies" method="POST">
        <label for="">Choix type audio</label>
        <select name="audio" id="salut">
            <option value="dblFrench">Doublé en français</option>
            <option value="std">Standard</option>
        </select><br>
        <label for="">Choix heure minimum</label>
        <input type="time" class="input-group" name="heuremin"><br>
        <input type="submit" class="btn-dark">
    </form>
    <br>
<?php
$content = ob_get_clean();
require_once "gabarit.php";
?>