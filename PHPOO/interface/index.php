<?php
require_once 'Cube.php';
require_once 'Sphere.php';

function afficheFormeVolume(Volume $Volume){
    echo 'la forme du volume est : ' . $volume->getForme();
}
$cube = new Cube();
$sphere = new Sphere();

var_dump($cube instanceof Volume); //true

// cube et sphere implément l'interface volume donc on peut les passer en parametre a la fonction afficheFormeVolume
afficheFormeVolume($cube);
echo '<br>';
afficheFormeVolume($sphere);

$de = new De();
var_dump($de instanceof De); // true
//par héritage instance de cube
var_dump($de instanceof Cube); // true
// par implémentation instance de texture
var_dump($de instanceof Texture); // true
// parce que cube implémente volume, instance de volume
var_dump($de instanceof Volume); // true