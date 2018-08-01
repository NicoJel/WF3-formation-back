<?php 
// cette fonction est automatiquement appelée
// au moment de l'utilisation d'une classe contenue dans le fichier qui n'a pas été inclut
spl_autoload_register (function ($classname){
    // le chemin du fichier qui conteint la classe à charger
    $file = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $classname) . '.php';  

// si le fichier n'existe pas , on va le chercher dans le sous repertoire external/lib
    if (!file_exists($file)) {
        $file= __DIR__ . DIRECTORY_SEPARATOR
        . 'external' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR
        . str_replace('\\', DIRECTORY_SEPARATOR, $classname . '.php');
    }

    require_once $file;

});

