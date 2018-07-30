<?php
// initialisation de la session
session_start();

define('RACINE_WEB', '/ajax/Boutique/');
define('PHOTO_WEB', RACINE_WEB . 'photo/');
define('JS_WEB', RACINE_WEB . 'js/');

define('PHOTO_DIR', $_SERVER['DOCUMENT_ROOT'] . 'ajax/boutique/photo/');
define(
    'PHOTO_DEFAULT',
    'https://dummyimage.com/600x400/cccccc/ffffff&text=Pas+d\'image'
);

require_once __DIR__ . '/cnx.php';
require_once __DIR__ . '/fonctions.php';