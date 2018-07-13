<?php
session_start();

define('RACINE_WEB', '/formation/back/php/boutique/');
define('PHOTO_WEB', RACINE_WEB . 'photo/');
define('PHOTO_DIR', $_SERVER['DOCUMENT_ROOT'] . '/formation/back/php/boutique/photo/');
define('PHOTO_DEFAUT', PHOTO_DIR . 'cestleclate.gif');

require_once __DIR__ . '/cnx.php';
require_once __DIR__ . '/function.php';