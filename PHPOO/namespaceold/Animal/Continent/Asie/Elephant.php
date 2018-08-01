<?php
namespace Animal\Continent\Asie;

require_once __DIR__ . '/../..Elephant.php';

use Animal\Elephant as ElephantGenerique;

class Elephant implements ElephantGenerique
{  
    public function getTailleOreilles()
    {
        return 'petites';
    }

    public function etreVu()
    {
        // l'antislash initial renvoie àla racine des namespaces
        // ici : la classe Touriste qui n'a pas de namespace
        $touriste = new \Touriste();

        $touriste->voirElephant('afrique');
    }
}