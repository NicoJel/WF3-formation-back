<?php
require_once 'Volume.php';
require_once 'Texture.php';

// une classe peut implementer plusieurs interfaces

class Brique implements Volume, Texture
{
    /* la classe doit contenir les méthodes getCouleur et getMatiere 
       car elle implémente Texture 
       et la methode getForme car elle implémente Volume
    */
    public function getCouleur(): string
    {
        return 'rouge';
    }
    public function getMatiere(): string
    {
        return 'terre';
    }
    public function getForme(): string
    {
        return 'parallélépipède rectangle';
    }
}