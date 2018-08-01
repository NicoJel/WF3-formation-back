<?php

/*
   Créer :
 - une classe abstraite Vehicule
 - 2 classes qui en héritent : Voiture et Moto
 qui vont contenir des méthodes pour retourner
    - le nombre de roues 2 4
    - type de carburant essence diesel
    - vitesse max
 - instancier une voiture et une moto
 - ajouter deux attributs contenanceReservoir et LitresEssence
 - créer une classe Pompe (à essence) 
    - avec un attribut contenanceReservoir et litresEssence
 - ajouter aux véhicules une méthode fairePlein() qui prend une pompe en paramètre
   cette methode va rajouter le carburant au vehicule et la retirer a la pompe
 - gerer le cas où la pompe ne permet pas de faire le plein
*/

require_once 'Vehicule.php';
require_once 'Voiture.php';
require_once 'Moto.php';
require_once 'Pompe.php';


//$voiture = new Voiture('diesel', 180);
$moto = new Moto('essence', 300, 30, 20);

$pompe = new Pompe(2000, 3, 'essence');

echo 'reservoir pompe : ' . $pompe->getContenanceReservoir() . ' litres';
echo'<br>';
echo 'litre pompe : ' . $pompe->getLitresEssence() . ' litres';
echo'<br>';
echo 'reservoir moto : ' . $moto->getContenanceReservoir() . ' litres';
echo'<br>';
echo 'litre moto : ' . $moto->getLitresEssence() . ' litres';
echo'<br>';
echo 'je fais le plein ';
echo'<br>';
echo $moto->fairePlein($pompe);
echo'<br>';
echo 'nouveau niveau d\'essence de moto : ' . $moto->getLitresEssence() . ' litres';
echo'<br>';

echo 'nouveau niveau d\'essence de pompe : ' . $pompe->getLitresEssence() . ' litres';



