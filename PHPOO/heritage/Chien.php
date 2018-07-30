<?php

require_once 'Animal.php';

class Chien extends Animal
{
    public function cherchePrive()
    {
        // l'attribut prive n'existe pas pour les classes filles car déclaré private dans Animal
        return $this->prive;
    }

    public function ditEspece()
    {
        // l'attribut espece est accessible pour les classes filles car déclaré
    }

    public function crier()
    {
        echo 'ouaf';
    }
}