<?php

require 'Member.php';

$member = new Member();

// on appelle les getters pour accéder aux valeurs des attributs
// NULL : pas de valeur par défaut dans la classe
var_dump($member->getFirstname());

$member->setFirstname('nico');
$member->setLastname('las');
$member->setAge('27');

echo '<br>';
var_dump($member->getFirstname());

$member2 = new Member();


// le "return $this;" dans les setters permets de chaîner les appels aux setters = interface fluide (fluent setters)
$member2
        ->setFirstname('nicoco')
        ->setLastname('lalala')
        ->setAge('12');