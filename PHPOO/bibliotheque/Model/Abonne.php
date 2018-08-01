<?php
namespace Model;

use App\Cnx;


class Abonne
{
    private $id;

    private $prenom;

    public function __construct($prenom = null, $id = null) {
        
        $this->setId($id);
        $this->setPrenom($prenom);
        ;
    }

        public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public static function fetchAll()
    {
        $pdo = Cnx::getInstance();
        
        $stmt = $pdo->query('SELECT * FROM abonne');
        
        $abonnes = [];
        
        foreach ($stmt->fetchAll() as $abonne) {
            $abonnes[] = new self(
                    $abonne['prenom'],
                    $abonne['id']
            );
        }
        
        return $abonnes;
    }
    public function save()
    {
        if (empty($this->id)) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    private function update(){
        $pdo = Cnx::getInstance();
        
        $query = <<<SQL
UPDATE abonne SET prenom = :prenom
WHERE id = :id
SQL;
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':prenom' => $this->prenom,
            ':id' => $this->id
        ]);
    }
    public function validate(){
        $errors = [];

        if (empty($this->prenom)){
            $errors[] = 'Le prénom est vide';
        } elseif (strlen($this->prenom) > 100) {
                $errors[] = 'Le prénom ne doit pas faire plus de 100 caractères';

        }

        return $errors;
    }


    private function insert(){

    $pdo = Cnx::getInstance();

    /*$query = 'INSERT INTO abonne(prenom) VALUES (' . $pdo->quote($this->prenom) . ')';*/

    $query = 'INSERT INTO abonne(prenom) VALUES (:prenom)';
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':prenom' => $this->prenom
    ]);
    }
    /**
     * 
     * @param type $id
     * @return Abonne
     */
    public static function find($id){
      
        
        $pdo = Cnx::getInstance();
      
        $query = 'SELECT * FROM abonne WHERE id=' . $id;  
        $stmt = $pdo->query($query);
        $result = $stmt->fetch();
        
        // retourne un objet Abonne avec les attributs id et prenom à partir
        // du résultat de la requete
        return new self($result['prenom'], $result['id']);
    }
    
    public function delete(){
        $pdo = Cnx::getInstance();
        
        $query = 'DELETE FROM abonne WHERE id=' . $this->id;
        $pdo->exec($query);
        }

}