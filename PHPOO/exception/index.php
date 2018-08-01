<?php
require_once 'Testeur.php';

try {
    $a = false;

    if (!$a) {
        throw new Exception('Je voulais que $a soit vrai ');
    }
    /* quand une exception est jetée, le code qui se trouve après
    ne s'execute pas et on entre directement dans le bloc catch*/
    echo 'ici';
} catch (Exception $e) {
    var_dump($e->getMessage());
}

/* si une exception est jetée hors d'un bloc try catch : fatal error
$testeur = new Testeur();
$testeur = accepteDix(5);
*/

try {
    $testeur = new Testeur();
    $testeur->accepteDix(5);
}catch (Exception $e) {
    file_put_contents('log.txt', '[' 
            . date('Y-m-d H:i:s') . '] ' 
            . $e->getFile()  
            . ' line ' . $e->getLine()
            . ' ' . $e->getMessage()
            . "\n" . $e->getTraceAsString() . "\n",
    FILE_APPEND
);
}

echo '<br>';

$testeur->raleSiNonDix(6);

try {
    $user = new User();

    $user
        ->setName('moi')
        ->setAge(27)
        ->setStatus('clown')
    ;

    echo 'utilisateur créé';
} catch (InvalidArgumentException $e) {
    echo 'une méthode a reçu une valeur non valide : ' . $e->getMessage();
} catch (UnexpectedValueException $e) {
    echo 'une méthode a reçu une valeur inattendue : ' . $e->getMessage();
} catch (Exception $e) {
    echo 'il y a eu un problème, mais je sais pas précisément quoi : ' . $e->getMessage();
} finally {
    echo "Du code qui va s'executer qu'une exception ait été attrapée ou non";
}