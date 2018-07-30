<?php
require_once 'Animal.php';
class Maitre

{
    /**
     * 
     * @var Animal
     */
    private $animal;

    

    
    public function getAnimal()
    {
        return $this->animal;
    }

    
    public function setAnimal(Animal $animal)
    {
        $this->animal = $animal;

        return $this;
    }

    public function caresserAnimal()
    {
        if (!empty($this->animal)) {
            $this->animal->crier();
        }
    }
}