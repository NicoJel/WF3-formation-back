<?php
namespace Animal\Continent\Afrique;

require_once __DIR__ . '/../..Elephant.php';

use Animal\Elephant as ElephantGenerique;

class Elephant implements ElephantGenerique
{  
    public function getTailleOreilles():string
    {
        return 'grandes';
    }
}