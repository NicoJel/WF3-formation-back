<?php
class User
{
    /**
     * attribut de classe avec une valeur par défaut
     * 
     * @var string
     */
    public $firstname = 'Nicolas';

    /**
     * attribut de classe sans une valeur par défaut
     * 
     * @var string
     */
    public $lastname;

    /**
     * Une attribut privé n'est accessible qu'à l'interieur de la classe
     * 
     * @var int
     */
    private $age = 27;

    /**
     * Une methode est une fonction interne à la classe
     * 
     * @return string
     */
    public function getFullname()
    {
        // $this fait reference à l'objet qui appelle la méthode
        return $this->firstname . ' ' . $this->lastname;
    }

    public function getInfo()
    {
        return $this->getFullname() . ', ' . $this->age . ' ans';
    }

    // Ecrire une méthode qui fait vieillir l'utilisateur d'un an
    public function anniv()
    {
        $this->age++;
    }
}

// instanciation de la classe
// $user est un objet instance de la classe User
$user = new User();

// la flèche permet d'acceder à un attribut de la classe
echo $user->firstname;

// création d'un attribut à la volée = mauvaise pratique
$user->nouvelAttribut = 'une valeur';

//modification de la valeur d'un attribut
$user->lastname  = 'Jelsch';
echo '<br>';
var_dump($user->lastname);

// $user2 est un autre objet de la classe user
// la valeur de ses attributs n'est pas liée à celle de $user
$user2 = new User();
echo '<br>';
var_dump($user2->lastname);

echo '<br>';
// appel de la méthode getFullname()
echo $user->getFullname();

// Fatal error : l'attribut $age est inaccessible en dehors de la classe
// var_dump($user->age);

// J'affiche les infos completes
echo '<br>';
echo $user->getInfo();

echo '<br>';
$user->anniv();
echo $user->getInfo();

