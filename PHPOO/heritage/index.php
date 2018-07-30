<?php
require 'Chien.php';
require 'Chat.php';
require 'Siamois.php';
require 'MaitreChien.php';
require 'Maitre.php';
//require 'SiamoisAngora.php';

$chien = new Chien();

echo $chien->identifier();

$chat = new Chat();

echo '<br>' . $chat->identifier();

/**
 * Fatal erroe: la cla
 */
echo '<br>' . $chien->getPrive();
echo '<br>' . $chien->cherchePrive();
echo '<br>' . $chien->ditEspece();
// fatal error: l'attribut longueurPoils est déclaré protected dans Chat
// echo '<br>' . $chien->longueurPoils();

echo '<br>';
$chat->crier();
$siamois = new Siamois();
$siamois->ronronner();

$higgins = new MaitreChien();
$zeus = new Chien();
$higgins->setChien($zeus);
echo '<br>';
// $higgins->getChien() retourne un objet instance de la classe chien
//donc on peut appeler dessus la méthode crier de la classe chien
$higgins->getChien()->crier();
echo '<br>';
echo get_class($higgins); // maitrechien
echo '<br>';
echo get_class($higgins->getChien()); //chien
// instanceof permet de savoir si une variable est un objet instance d'une classe donnée
var_dump($higgins instanceof MaitreChien); //true
echo '<br>';
var_dump($higgins instanceof Chien); //false
echo '<br>';
var_dump($zeus instanceof Chien); //false
echo '<br>';
// un objet instance de chien est aussi instance d'animal
// car chien hérite d'animal
var_dump($zeus instanceof Animal); //true

$maitre = new Maitre();
$minou = new Chat();
$maitre->setAnimal($minou);
echo '<br>';
$maitre->getAnimal()->crier();

$maitre2 = new Maitre();
$medor = new Chien();
$maitre2->setAnimal($medor);
echo'<br>';
$maitre2->getAnimal()->crier;

$maitre3->setAnimal($chatSiamois);
$maitre3->getAnimal()->crier;

$maitre->caresserAnimal();


