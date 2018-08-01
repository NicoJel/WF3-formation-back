<?php
require_once 'Cube.php';
require_once 'Texture.php';

class De extends Cube implements Texture
{
    // on peut à la fois heriter d'une classe et implementer une ou plusieurs interfaces
    public function getCouleur(): string
    {
        return 'blanc';
    }
    public function getMatiere(): string
    {
        return 'plastique';
    }
}