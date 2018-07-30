<?php

class Person{

    private $firstname;

    private $lastname;

    private $age;

    private $hobbies;

    /**
     * Get the value of hobbies
     */ 
    public function getHobbies()
    {
        return $this->hobbies;
    }

    /**
     * Set the value of hobbies
     *
     * @return  self
     */ 
    public function setHobbies($hobbies)
    {
        $this->hobbies = $hobbies;

        return $this;
    }
/**
 * Méthode appelée automatiquement quand on traite un objet de la classe en chaîne de caractères (ex: faire un echo dessus)
 * 
 * @return string
 */
    public function __toString()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    /**
     * Le constructeur est appelé automatiquement à l'instanciation de la classe
     * 
     * @param string $lastname
     * @param string $firstname
     * @param int $age
     * @param array $hobbies
     */
    public function __construct($lastname, $firstname, $age, $hobbies = [])
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->hobbies = $hobbies;
    }

    
}