<?php
require_once __DIR__ . '/../include/init.php';
adminSecurity();

$query = 'SELECT count (*) FROM produit WHERE categorie_id = ' . (int)$_GET['id'];

$stmt = $pdo->query($query);
$nb = $stmt->fetchColumn();

if ($nb == 0) {
    $query = 'DELETE FROM categorie WHERE id = '
    . (int)$_GET['id'];
    $pdo->exec($query);

    setFlashMessage('La categorie est supprimée');
}else {
    setFlashMessage(
        'La catégorie ne peut pas être supprimée car elle contient des produits', 'error'
    );
}

;
$pdo->exec($query);

setFlashMessage('La catégorie est supprimée');
header('Location: categories.php');
die;
