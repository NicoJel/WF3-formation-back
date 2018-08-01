<?php
class Testeur
{
    public function accepteDix($nb)
    {
        if ($nb != 10) {
            throw new Exception('10 expected, ' . $nb . ' given');
        }
        echo 'oké';
    }
}