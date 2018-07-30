<?php

class Commande
{
    /**
     * Attribut statique
     * appartient à la classe et non à l'objet
     * 
     * @var string
     */
    public static $defaultStatut = 'en cours';

    private static $nbCommandes = 0;

    public function __construct()
    {
        self::$nbCommandes++;
    }

    /**
     * Get the value of nbCommandes
     */ 
    public function getNbCommandes()
    {
            return $this->nbCommandes;
    }

    public static function dummy()
    {
        // Fatal error : this n'a pas de sens  dans une méthode statique car $this fait référence à un objet instancié
        return $this;
    }
}