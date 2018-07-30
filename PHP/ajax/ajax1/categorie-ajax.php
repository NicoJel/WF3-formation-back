
<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=boutique_php', // chaîne de connexion
    'root', // utilisateur
    '', // mot de passe
    // tableau d'options
    [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);


if (!empty($_POST['nom'])) {
    
    $response = [
        'statut'    => 'ok',
        'message'   => 'confirmé'
    ];

    $query = 'INSERT INTO categorie (nom) VALUES (:nom)';
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':nom' => $_POST['nom']
    ]);
 
} else {

    $response = [
        'statut'    => 'ko',
        'message'   => 'erreur'
    ];


}

echo json_encode($response);


    

