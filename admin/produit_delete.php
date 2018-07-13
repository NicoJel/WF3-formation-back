<?php

require_once __DIR__ . '/../include/init.php';
adminSecurity();

$query = 'DELETE FROM produit WHERE id = ' . (int)$_GET['id'];
$pdo->exec($query);
$stmt = $pdo->query($query);
$photo = $stmt->fetchColumn();

// on supprime la photo du produit si il y en a une
if (!empty($photo)) {
    unlink(PHOTO_DIR . $photo);
}


$query = 'DELETE FROM produit WHERE id = ' . (int)$_GET['id'];

setFlashMessage('Le produit est supprimé');
header('Location: produits.php');
die;