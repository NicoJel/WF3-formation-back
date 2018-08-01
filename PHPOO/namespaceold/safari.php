<?php
/*
require_once 'Animal/Contient/Afrique/Elephant.php';
require_once 'Animal/Contient/Asie/Elephant.php';
*/

require_once __DIR__ . '/autoload.php';

use Animal\Contient\Afrique\Elephant;
use Animal\Contient\Asie\Elephant  as ElephantAsie;
use String\Utils;
use Animal\Contient\Afrique\Gazelle;

// instanciation de la calsse Animal\Contient\Afrique\Elephant
$elephantAfrique = new Elephant();
// instanciation de la calsse Animal\Contient\Asie\Elephant
$elephantAsie = new ElephantAsie();

echo $elephantAfrique->getTailleOreilles();
echo '<br>' . $elephantAsie->getTailleOreilles();
// s'il n'y avait pas de use, il faudrait utiliser le nom complet
$elephantSansUse = new Animal\Contient\Afrique\Elephant();

echo '<br>';
Utils::yell($elephantAfrique->getTailleOreilles());

$gazelle = new Gazelle();
echo '<br>';
$gazelle->voirElephant();
echo '<br>';
$elephantAsie->etreVu();