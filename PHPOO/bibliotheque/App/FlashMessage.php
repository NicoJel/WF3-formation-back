<?php

namespace App;

class FlashMessage {
    // enregistre un message en session pour affichage "one shot"
    public static function setFlashMessage($message, $type = 'success')
    {
        $_SESSION['flashMessage'] = [
            'message' => $message,
            'type' => $type
        ];
    }

    // affiche un message flash s'il y en a un en session
    // puis le supprime
    public static function displayFlashMessage()
    {
        if (isset($_SESSION['flashMessage'])) {
            $message = $_SESSION['flashMessage']['message'];
            // pour la classe alert-danger du bootstrap
            $type = ($_SESSION['flashMessage']['type'] == 'error')
                ? 'danger'
                : $_SESSION['flashMessage']['type']
            ;

            echo '<div class="alert alert-' . $type . '">'
                . ' <h5 class="alert-heading">' . $message . '</h5>'
                . '</div>'
            ;
            // suppression du message dans la session
            // pour affichage unique
            unset($_SESSION['flashMessage']);
        }
    }

}

