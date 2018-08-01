<?php

trait Dumper
{
    public function dump($variable)
    {
        echo '<pre>';
        var_dump($variable);
        echo '</pre>';
    }
}