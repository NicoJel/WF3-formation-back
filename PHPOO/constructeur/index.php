<?php
require 'person.php';

// Fatal error : le constructeur de la classe conteint 3 paramètres obligatoires
//$person = new Person();

echo '<pre>';
// Pour pouvoir instancier la classe il faut passer des valeurs pour les maramètres attendus pa la methode __construct()
$person = new Person('nicolas', 'Jelsch', 27);
var_dump($person);

// comme pour toute fonction ou méthode, quand un paramètre du constructeur a une valeur par défaut, on peut choisir d'y passer une valeur ou pas
$person2 = new Person('nicoco', 'lalala', 12, ['PHP', 'Laravel']);
var_dump($person2);
echo '</pre>';


// si la classe possède une méthode __toString(), elle est appelée automatiquement, sinon, fatal error
echo $person;