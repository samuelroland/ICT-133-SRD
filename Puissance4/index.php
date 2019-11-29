<HTML>
<HEAD>
    <STYLE type="text/css">
        h1{	font-weight:		bold;
            text-decoration: 	underline;
            text-align:			center}
        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }
        table {
            border-collapse: collapse;
        }
    </STYLE>
    <TITLE>Puissance 4</TITLE>
</HEAD>
<BODY style='background-color:#F0E0D0'>
<h1>Puissance 4</h1>

<TABLE>
    <?php
    /**
     *  Projet: Puissance4
     *  Repos: ICT-133-SRD
     *  Author: Samuel Roland
     *  Creation date: 29.11.2019
     */
    $tailletable=8; //constante de la taille du tableau

    for ($row=0;$row<$tailletable;$row++){
        //créer la cellule:
        echo "<tr>";
        for ($cell=0;$cell<$tailletable;$cell++){

            if ($cell==7 && $row==0) {
                echo "<td><img src=\"bleu.JPG\"></td>";
            }else  if ($cell==7 && $row==6){
                echo "<td><img src=\"rouge.JPG\"></td>";
            }else{
                echo "<td></td>";
            }

        }
        echo "</tr>";
    }

    ?>


</TABLE>
</BODY>
</HTML>


