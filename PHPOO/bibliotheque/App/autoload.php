<?php
// cette fonction est automatiquement appelée
// au moment de l'utilisation d'une classe contenu dans
// fichier qui n'a pas été inclus
spl_autoload_register (function ($classname) {
    // le chemin du fichier qui contient la classe à charger
    $file = __DIR__ . DIRECTORY_SEPARATOR
        . '..' . DIRECTORY_SEPARATOR
        . str_replace('\\', DIRECTORY_SEPARATOR, $classname)
        . '.php'
    ;

    require_once $file;
});