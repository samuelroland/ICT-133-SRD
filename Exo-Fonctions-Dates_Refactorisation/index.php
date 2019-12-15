<?php
/**
 * La fonction getDaysBefore retourne une chaîne de caractères qui représente les jours du
 * début de la semaine qui précèdent le premier jour du mois donné.
 * Cette chaîne peut donc être vide si le mois choisi commence un lundi.
 * Chaque jour est mis dans une balise <li> qui a la classe CSS 'discreet'
 *
 * Exemple:
 *     Le mois d'avril 2020 commence un mercredi, il est précédé du mois de mars, qui compte 31 jours.
 *     On doit donc voir le lundi 30 mars et le mardi 31 mars avant le mercredi 1er avril
 *     getDaysBefore(4,2020) retournera donc la chaîne:
 *
 *     <li class='discreet'>30</li><li class='discreet'>31</li>
 *
 * @param $month , numérique: le mois à afficher
 * @param $year , numérique: l'année du mois à afficher
 */

function getDaysBefore ($month, $year)
{
    // TODO: Ecrire le code de la fonction
}

/**
 * La fonction getDaysAfter retourne une chaîne de caractères qui représente les jours de
 * la fin de la semaine qui suivent le dernier jour du mois donné.
 * Cette chaîne peut donc être vide si le mois choisi se termine un dimanche.
 * Chaque jour est mis dans une balise <li> qui a la classe CSS 'discreet'
 *
 * Exemple:
 *     Le mois d'avril 2020 finit un jeudi.
 *     On doit donc voir le vendredi 1er mai, le samedi 2 mai et le dimanche 3 mai après le jeudi 30 avril
 *     getDaysAfter(4,2020) retournera donc la chaîne:
 *
 *     <li class='discreet'>1</li><li class='discreet'>2</li><li class='discreet'>3</li>
 *
 * @param $month , numérique: le mois à afficher
 * @param $year , numérique: l'année du mois à afficher
 */

function getDaysAfter ($month, $year)
{
    // TODO: Ecrire le code de la fonction
}
?>