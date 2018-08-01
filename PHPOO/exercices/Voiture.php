<?php

require_once 'Vehicule.php';

class Voiture extends Vehicule
{
    const nbroues = 4;

    public function getnbroues(): int
    {
        return self::nbroues;
    }

    
}
