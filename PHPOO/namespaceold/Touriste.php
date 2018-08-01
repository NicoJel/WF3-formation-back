<?php

use Animal\Contient\Afrique\Elephant;
use Animal\Contient\Asie\Elephant  as ElephantAsie;

class Touriste
{
    public function voirElephant($continent)
    {
        if ($continent == 'afrique') {
            $elephant = new Elephant();
        } elseif ($continent == 'asie') {
            $elephant = new ElephantAsie();
        }

        if (isset($elephant)) {
            echo 'Je vois un éléphant avec de ' . $elephant->getTailleOreilles() . ' oreilles';
        } else {
            echo "il n'y a pas d'éléphants ici";
        }
    }

}
