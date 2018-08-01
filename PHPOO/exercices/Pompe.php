<?php

require_once 'Vehicule.php';

class Pompe
{
    protected $contenanceReservoir;
    protected $litresEssence;
    protected $carburant;
    
    public function __construct($contenanceReservoir, $litresEssence, $carburant)
    {

        $this->setContenanceReservoir($contenanceReservoir);
        $this->setLitresEssence($litresEssence);
        $this->setCarburant($carburant);

    }

    public function getContenanceReservoir()
    {
        return $this->contenanceReservoir;
    }


    public function setContenanceReservoir($contenanceReservoir)
    {
        $this->contenanceReservoir = $contenanceReservoir;

        return $this;
    }


    public function getLitresEssence()
    {
        return $this->litresEssence;
    }


    public function setLitresEssence($litresEssence)
    {
        $this->litresEssence = $litresEssence;

        return $this;
    }

    public function getCarburant()
    {
        return $this->carburant;
    }


    public function setCarburant($carburant)
    {
        
            $this->carburant = $carburant;
        
        return $this;
    }
}
