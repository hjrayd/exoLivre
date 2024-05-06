<h1> POO Livre </h1>

<p> Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un
auteur. Un auteur comporte un nom et un prénom.
Une méthode toString() sera appréciée dans chacune de vos classes.
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie
complète d’un auteur : </p>


<h2> Afficher le résultat </h2>

<?php

require "classes/Auteur.php";
require "classes/Livre.php";


$auteur = new Auteur ("Stephen", "King");

$livre1 = new Livre ("Ca", 1138, 1986, 20, $auteur);
$livre2 = new Livre ("Simetierre", 374, 1983, 15, $auteur);
$livre3 = new Livre ("Le Fléau", 823, 1978, 14, $auteur);
$livre4 = new Livre ("Shining", 447, 1977, 16, $auteur);





echo $auteur->afficherBibliographie();


?>