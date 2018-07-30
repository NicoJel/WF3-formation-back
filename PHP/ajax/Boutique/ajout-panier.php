
<?php
require_once __DIR__ . '/../boutique/include/init.php';

$stmt = $pdo->query('SELECT * FROM produit WHERE id=' . $_POST['id']);
$produit = $stmt->fetch();

ajoutPanier($produit, $_POST['quantite']);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>categorie</title>
</head>

<body>
    
    <form id="monform">
        <div>
            <label>Nom</label>
            <input type="text" name="nom">
        </div>
        <div>
            <button type="submit">Envoyer</button>
        </div>
    </form>

    <div id="reponse"></div>



<!-- JQUERY -->
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>

</body>
</html>