<?php
$data = [
    'nom' => $_GET['prenom'] . ' ' . $GET['nom']
];

// transforme un tableau PHP en JSON
echo json_encode($data);