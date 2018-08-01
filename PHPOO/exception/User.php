<?php
class User
{
    private $name;

    private $age;

    private $statuts;

    private static $availableStatuses = [
        'user',
        'admin'
    ];
    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getStatuts()
    {
        return $this->statuts;
    }

    public function setName()
    {
        if (strlen($name) > 50 ) {
            throw new Exception("'$name' fait plus de 50caractères");
        }
        $this->name = $name;
        return $this;
    }

    public function setAge($age)
    {
        if (!is_int($age)) {
            //classe d'exception pour un paramètre non voulu
            throw new InvalidArgumentException("'$age' n'est pas un entier");
        }

        $this->age = $age;
        return $this;
    }

    public function setStatuts($statuts)
    {
        if (!in_array($status, self::$availableStatuses)) {
            throw new UnexpectedValueException("'$status' n'est pas un statut reconnu, les status possibles sont : "
            . implode(', ', self::$availableStatuses));
        }
        $this->statuts = $statuts;
        return $this;
    }
}