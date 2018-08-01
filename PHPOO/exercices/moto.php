<?php

require_once 'Vehicule.php';

class moto extends Vehicule
{
    const nbroues = 2;
    
    public function getnbroues(): int
    {
        return self::nbroues;
    }

}
