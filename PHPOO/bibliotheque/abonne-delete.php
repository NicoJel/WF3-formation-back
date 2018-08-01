<?php

require __DIR__ . '/App/init.php';

/*récupérer un objet Abonne à partir de l'id reçu dans l'url
 * ajouter une méthode delete() qui le supprime en bdd et l'utiliser ici
 * gérer le cas où l'abonné ne peut pas être supprimé :
 * -> rediriger avec un message d'erreur ou de confirmation
 */

use Model\Abonne;
use App\FlashMessage;

/*
$abonne = Abonne::find($_GET['id']);

if (!empty ($abonne['prenom'])){
    $abonne->delete();
    FlashMessage::setFlashMessage("L'abonné a bien été supprimé");
    
    header('Location: abonne.php');
    die;
} else{
        FlashMessage::setFlashMessage("L'abonné ne peut être supprimé", 'error');
}
*/
// OU

try{
    $abonne = Abonne::find($_GET['id']);
    $abonne->delete();
    FlashMessage::setFlashMessage("L'abonné a bien été supprimé");

} catch (Exception $e) {
    FlashMessage::setFlashMessage("L'abonné ne peut être supprimé", 'error');
}

header('Location: abonne.php');
die;



