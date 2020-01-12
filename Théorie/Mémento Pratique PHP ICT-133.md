# Mémento Pratique PHP ICT-133
### Les bases du php et les spécialités et points intéressants.

### Règles générales:
- Tout le code javascript se trouve dans une balise PHP:
<?php
echo "salut";
?>

- Pas besoin de déclarer les variables et leur type.
- Toutes les variables commencent par $. Ca indique que ce qui suit c'est une variable.
- Il y a des ";" à la fin des lignes !

$x=12;
$y="Hello";

Attention comme il n'y a pas de déclaration des variables ont peut mettre deux fois le meme nom:
$x=12;
$x="Hello";



Manipulation de chaines de caractères:
MERCI en javascript:

Mesurer:
Extraire: substr(thestring, startpos, length);	//retourne la chaine extraite
Rechercher:
Concaténer: echo "<li>Produit ".$i."</li>"; On met un point au lieu du + 
Interpoler: echo "<li>Produit $i</li>"; mais double guillemets obligatoires. Ca ne fonctionne pas avec les tableaux ! On utilise donc la concaténation.

Il existes pleins de méthodes avec les chaines de caractères:
str_replace("_", " ", $filename)	//remplacer les _ par des espace dans filename.
strlen($chaine) retourne la longueur de la chaine.


Dates:

Toutes les syntaxes sont sur ce lien pour la fonction date()
https://www.php.net/manual/en/function.date.php

Pour se mettre sur le fuseau horaire de la suisse, on ajoute:
date_default_timezone_set("Europe/Zurich");

Exemples de syntaxes:
echo "<li>".date('l d F Y')."</li>";
echo "<li>".date('M jS Y')."</li>";
echo "<li>".date('d/m/Y H:i a')."</li>";
echo "<li>".date('d M Y, H:i:s')."</li>";
echo "<li>".date('r')."</li>";

Ce qui donne:
    Thursday 28 November 2019
    Nov 28th 2019
    28/11/2019 11:41 am
    28 Nov 2019, 11:41:02
    Thu, 28 Nov 2019 11:41:02 +0100



Les variables peuvent changer de type au cours du code. On peut faire un changement implicite par un calcul:

$i = $_GET['month'];  	//$i est de type string:

$i +=0;	//on fait un calcul et le type change.

switch($i){
	case 1:		//on peut donc l'utiliser comme un int
		...
		break;
	...
}

Syntaxes simplifiées:

On peut remplacer 

<?php echo $name ?>

par <?= $name ?>



Notions de gabarit:
données dans un fichier class.php et affichage avec le gabarit avec require_once du gabarit.

But: séparer MVC. créer un template/un gabarit = un modèle avec toutes les positions des 

Lier le gabarit au données:
require(nomfichier)
require_once(nomfichier)
include()

simplement prendre le contenu du fichier et le placer à l'endroit du require.

au cas ou le fichier n'existe pas:
require: crash
require_once: crash
include: n'inclut rien.


ATTENTION: Comme les fichiers sont comme copiés collés dans le fichier qui faire require, le chemin des fichiers est donc depuis le premier script qui fait un require.

Buffer (mémoire tampon)

Fonctions php:
ob_start();	//=output buffer start
Définition: met un charriot à la sortie de la salle. (tout ce qui va suivre ca va dans le buffer)

$content =  ob_get_clean();
Définition:

Exemple:
<?php
ob_start();	//départ du buffer
?>
    <a href='?action=movies'><img src="images/movies.jpg" alt="movies" height="250px"></a>
    <a href='?action=concerts'><img src="images/concerts.jpg" alt="movies" height="250px"></a>
<?php
$content = ob_get_clean();	//recevoir le buffer
?>

isset();
unset();	//détruire/vider une variable


Boucle Foreach:
le foreach est différent de en C# et l'élément $concert n'est qu'une copie et pas un lien sur l'élément réel. C'est parfait pour accéder en lecture mais pas fait pour faire des modifications ou des suppressions.

foreach($listconcerts as $concert){
	
}


foreach($listofconcerts as $i => $concert){
	unset(listofconcerts[$i]);
}