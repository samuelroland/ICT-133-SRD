# Mémento PHP ICT-133
### Les bases du php, les spécialités et points importants.

### Règles et notions générales:
- Pas besoin de déclarer les variables et leur type.
- Toutes les variables commencent par $. Ca indique que ce qui suit c'est une variable.
- Tout le code php se trouve dans une balise PHP:
<?php
echo "salut";
?>

Syntaxe simplifiée de la balise php: On peut remplacer: `<?php echo $name ?>` par `<?= $name ?>`
quand il n'y a qu'une valeur à afficher (plus besoin de `echo` du coup).


- Il y a des ";" à la fin des lignes !

>$x = 12;<br>
$y = "Hello";

Attention comme il n'y a pas de déclaration du types de variables. Attention à ne pas avoir deux variables différentes avec le même nom (pour deux valeurs différentes):

>$x = 12;<br>
$x = "Hello";

Les variables peuvent **changer de type** au cours du code. On peut faire un changement implicite par un calcul:

`$i = $_GET['month'];`  	$i est de type string:

`$i +=0;`	on fait un calcul et le type change.

`switch($i){ ... ` on peut donc l'utiliser comme un int

puis on fait `$i .= ""` on le concatène (.= meme principe que +=) et il devient de type string.


#### Manipulation de chaines de caractères:
Avec l'acronyme **MERCI**:

- **Mesurer**: `count($tableau)` retourne nombres d'éléments du tableaux, ou `strlen($myrandomstring)` retourne la longueur de la chaine.
- **Extraire**: `substr(thestring, startpos, length)` retourne la chaine extraite
- **Rechercher**: `stripos ( string $haystack , mixed $needle [, int $offset = 0 ] ) : int` cherche une aiguille dans une botte de foin donc une sous chaine dans une chaine.
- **Concaténer**: `"<li>Produit ".$i."</li>"` On met un "." au lieu du "+" en C#. 
- **Interpoler**: `"<li>Produit $i</li>"` mais double guillemets obligatoires. Attention, ça ne fonctionne pas avec les tableaux ! On utilise donc la concaténation pour les tableaux.

Beaucoup d'autres fonctions existent sur https://www.php.net :
- `str_replace("_", " ", $filename)` remplacer les "_" par des " " dans filename.
- `str_repeat ( string $input , int $multiplier ) : string` Repeat a string 
- `substr_count()` --> Count the number of substring occurrences

#### Affichage de dates:
`date ( string $format [, int $timestamp = time() ] ) : string`<br>
`$format` = format voulu ("Y-m-d" par exemple).
`$timestamp` = par défaut le temps de maintenant ou une date donnée.

Toutes les syntaxes sont sur ce lien pour la fonction `date()`
https://www.php.net/manual/en/function.date.php

Pour se mettre sur le fuseau horaire de la suisse, on ajoute:
`date_default_timezone_set("Europe/Zurich");`

Exemples de syntaxes:
>`echo "<li>".date('l d F Y')."</li>";`<br>
`echo "<li>".date('M jS Y')."</li>";`<br>
`echo "<li>".date('d/m/Y H:i a')."</li>";`<br>
`echo "<li>".date('d M Y, H:i:s')."</li>";`<br>
`echo "<li>".date('r')."</li>";`<br>

Résultats:<br>
>Thursday 28 November 2019<br>
Nov 28th 2019<br>
28/11/2019 11:41 am<br>
28 Nov 2019, 11:41:02<br>
Thu, 28 Nov 2019 11:41:02 +0100<br>


#### Principe du gabarit:
La gabarit c'est un modèle (concretement une page html qui contient en-tête et pied de page) et qui contient des zones qui sont générées par d'autres pages. C'est un template.

#### MVC
MVC = Modèle, Vue et Contrôleur. Cela consiste à séparer les données, de ce qui est affiché et de la logique effectuée. Détails dans [MVC explication.md]('MVC explication.md')

#### Lier les pages:
Puisque chaque pages à un but particulier (en MVC) mais qu'une seule page ne suffit pas, il faut pouvoir les lier.

3 manières de lier les pages entre elles:
- `require('nomfichier');`
- `require_once('nomfichier');`
- `include();`

Dans les 3 cas, le résultat est exactement le même que si on copiait à la place le contenu du fichier appelé.

Différences: si le fichier appelé n'existe pas:
- require: crash
- require_once: crash
- include: n'inclut rien.


ATTENTION: Comme les pages php sont comme copiés collés dans le fichier qui faire require,  le **chemin relatif** des fichiers sont relatifs **par rapport à la première page**(page demandée dans la requête). 

Toutes les variables en dehors de celles des fonctions sont accessibles directement par toutes les pages. Attention cependant à l'ordre dans lequel sont liés les pages et à l'initialisation des variables.

#### Buffer (mémoire tampon)
Utilité:
Permettre de générer un certain contenu sans l'afficher directement mais en faisant comme si on l'affichait. Donc on fait des `echo` et des bouts de html seuls mais ca n'est pas affiché. Ca va dans le buffer.

Fonctions pour le buffer:

`ob_start();`	output buffer start = met un charriot à la sortie de la salle. (tout ce qui va suivre ca va dans le buffer)

`$content =  ob_get_clean();`	on récupère le contenu du charriot et on le met dans $content


Exemple:

>`<?php`<br>
`ob_start();`	//départ du buffer<br>
`?>`<br>
    `<a href='?action=movies'><img src="images/movies.jpg" alt="movies" height="250px"></a>`<br>
    `<a href='?action=concerts'><img src="images/concerts.jpg" alt="movies" height="250px"></a>`<br>
`<?php`<br>
`$content = ob_get_clean();`recevoir le buffer<br>
`?>`<br>

`isset($_GET['action']);` retourne si valeur est définie (false si nulle)<br>
`unset();`	vider/rendre nulle une variable


#### Boucle Foreach:
Littéralement "pour chaque" donc c'est une boucle for améliorée qui prend tous les éléments. Pas besoin de savoir combien il y en a donc.
C'est différent qu'en C# et l'élément `$concert` n'est qu'une copie et pas un lien sur l'élément réel. C'est parfait pour accéder en lecture mais pas fait pour faire des modifications ou des suppressions.

>`foreach($listconcerts as $concert){`<br>
	`echo $concert['name'];`<br>
`}`<br>

Pour contourner on peut prendre l'index de l'élément en cours et utiliser le tableau réel:<br>
>`foreach($listofconcerts as $i => $concert){`<br>
`	unset(listofconcerts[$i]);`<br>
`}`

#### Tableaux:
