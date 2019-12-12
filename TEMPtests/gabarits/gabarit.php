<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gabarit test</title>
    <style>
        header{
            background-color: rebeccapurple;
        }
        img {
            height: 50px;
            margin-left: 50px;

        }
        footer{
            background-color: dimgrey;
        }
    </style>
</head>
<body>

<?php
/**
 *  Projet: xxx
 *  Filename: ICT-133-SRD
 *  Author: Samuel Roland
 *  Creation date: 12.12.2019
 */

echo "<h1>$title</h1>";
?>
<header>
    <img src="logo/logo.png" alt="logo">
    <nav>CPNV </nav>
</header>
<h2>Eleves de la classe</h2>
<ul>
    <?php
    for ($i=0;$i<count($students); $i++){
        echo "<li>$students[$i]</li>";
    }
    for ($i=0;$i<count($classes); $i++){
        echo "<li>$classes[$i]</li>";
    }

    ?>
</ul>

<footer>
    <img src="logo/download.png" alt="">
    <img src="logo/Twitter-logo.png" alt="">
    <img src="logo/fb_icon_325x325.png" alt="">
    <nav>great footer </nav>
</footer>
</body>
</html>