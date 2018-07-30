<?php
require_once __DIR__ . '/cnx.php';

// echo "id reçue : " . $_GET['id'];

$query = 'SELECT * FROM utilisateut WHERE id = ' . $_GET['id'];
$stmt = $pdo->query($query);
$utilisateur = $stmt->fetch();

// construction du HTML qui va être la réponse dans le traitement côté javascript
?>

<dl>
    <dt>Nom</dt>
        <dd><?= $utilisateur['nom']; ?></dd>
    <dt>Prénom</dt>
        <dd><?= $utilisateur['prenom']; ?></dd>
    <dt>Email</dt>
        <dd><?= $utilisateur['email']; ?></dd>
    <dt>Adresse</dt>
        <dd><?= $utilisateur['adresse']; ?><br>
        <?= $utilisateur['cp'] . ' ' . $utilisateur['ville']; ?>
        </dd>
</dl>