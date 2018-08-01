
<?php
require __DIR__ . '/App/init.php';

use Model\Abonne;
use App\FlashMessage;

/* faire le formulaire d'ajout d'abonné
 * en retour de post créer une nouvelle instance d'Abonne
 * ajouter une méthode save() à la classe Abonne
 * dans laquelle un objet Abonne va s'enregistrer en bdd et l'appeler ici
 */

$abonne = new Abonne();
        
if (!empty($_POST)) {
    
    $abonne->setPrenom($_POST['prenom']);
    
    if(isset($_GET['id'])){
        $abonne->setId($_GET['id']);
    }
    
    $errors = $abonne->validate();
    
    if (empty($errors)){
        $abonne->save();    

        FlashMessage::setFlashMessage("L'abonné est enregistré");
        header('Location: abonne.php');
        die; 
    } else {
        FlashMessage::setFlashMessage('Le formulaire contient des erreurs<br>' . implode('<br>', $errors), 'error');
    }
    
    
} elseif (isset($_GET['id'])) {
    //preremplir le formulaire:
    //créer une méthode static find($id) dans la classe abonné
    //qui retourne un objet Abonne avec id et prénom correspondant
    //à l'abonné en bdd => faire une requete select avec l'id reçu
    //en paramètre
    
    $abonne = Abonne::find($_GET['id']);

}

include __DIR__ . '/view/abonne-edit.html.php';