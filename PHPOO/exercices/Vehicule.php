<?php

abstract class Vehicule
{
    /**
     * Un attribut ou une méthode protected est accessible depuis les classes filles, masi reste inaccessible en dehors
     * 
     * @var string
     */

    protected $carburant;
    protected $vitessemax;
    protected $contenanceReservoir;
    protected $litresEssence;

    public static $typesCarburant = ['essence', 'diesel'];
    
    public function __construct($carburant, $vitessemax, $contenanceReservoir, $litresEssence)
    {
        $this->setCarburant($carburant);
        $this->setVitessemax($vitessemax);
        $this->setContenanceReservoir($contenanceReservoir);
        $this->setLitresEssence($litresEssence);

    }

    public function fairePlein($pompe)
    {
        $litresmanquants = $this->getContenanceReservoir() - $this->getLitresEssence();

        if($pompe->getCarburant() == $this->getCarburant()){
       
            if ($pompe->getLitresEssence() > $litresmanquants){
                $this->setLitresEssence($this->getContenanceReservoir());
                $pompe->setLitresEssence($pompe->getContenanceReservoir() - $litresmanquants);
                echo 'Le plein est fait!<br>';

            } elseif ($pompe->getLitresEssence() == 0 ) {
                echo 'Ah, Le réservoir de la pompe est vide<br>';
            }
            
            else {
                $this->setLitresEssence($this->getLitresEssence() + $pompe->getLitresEssence());
                echo 'Nous n\'avons pu rajouter que ' . $pompe->getLitresEssence() . ' litres';
            }
        } else {
            echo 'C\'est pas le bon carburant banane!';
        }
    }

    public function getCarburant()
    {
        return $this->carburant;
    }

 
    public function setCarburant($carburant)
    {
        if (in_array($carburant, self::$typesCarburant)){
            $this->carburant = $carburant;
        }
        return $this;
    }

    public function getVitessemax()
    {
        return $this->vitessemax;
    }

    public function setVitessemax($vitessemax)
    {
        $this->vitessemax = $vitessemax;

        return $this;
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

    abstract public function getnbroues();
    



}