<?php
class Foo
{
    // use permet d'integrer un ou plusieurs Traits
    use Dumper, Displayer;

    private $baz; 

    public function getBaz()
    {
        return $this->baz;
    }

    public function setBaz($baz)
    {
        $this->baz = $baz;

        return $this;
    }

    public function dumpBaz()
    {
        // on utilise $this comme si la méthode faisait partie de la classe
        $this->dump($this->baz); // méthode venant du trai dumper
    }

    public function displayBaz($color)
    {
        $this->display($this->baz, $color);
    }
}