<?php
require_once __DIR__ . '/include/init.php';

$errors = [];
$civilite = $nom = $prenom = $email = $ville = $cp = $adresse = '';

if (!empty($_POST)) {
    sanitizePost();
    extract($_POST);

    if (empty($civilite)) { //ou $_POST['civilite']
        $errors[] = 'La civilité est obligatoire'; // équivalent d'un push
    }

    if (empty($nom)) { //ou $_POST['civilite']
        $errors[] = 'Le nom est obligatoire'; // équivalent d'un push
    }

    if (empty($prenom)) { //ou $_POST['civilite']
        $errors[] = 'Le prénom est obligatoire'; // équivalent d'un push
    }

    if (empty($email)) { //ou $_POST['civilite']
        $errors[] = 'L\'email est obligatoire'; // équivalent d'un push
    // test de la validité de l'email
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email n'est pas valide";
    } else {
        $query = 'SELECT count(*) AS nb FROM utilisateur WHERE email = :email';
        $stmt = $pdo->prepare($query);
        $stmt->execute([':email' => $email]);
        $nb = $stmt->fetchColumn();

        if ($nb != 0) {
            $errors[] = 'Cet email est déjà utilisé';
        }
    }

    if (empty($ville)) { //ou $_POST['civilite']
        $errors[] = 'La ville est obligatoire'; // équivalent d'un push
    }

    if (empty($adresse)) { //ou $_POST['civilite']
        $errors[] = 'L\'adresse est obligatoire'; // équivalent d'un push
    }

    if (empty($cp)) { //ou $_POST['civilite']
        $errors[] = 'Le code postal est obligatoire'; // équivalent d'un push
    //ctype_digit teste qu'une chaîne de caractères ne contient que des chiffres
    } elseif (strlen($cp) != 5 || !ctype_digit($cp)) {
        $errors[] = "le code postal n'est pas valide";
    }

    if (empty($_POST['mdp'])) { //ou $_POST['civilite']
        $errors[] = 'Le mot de passe est obligatoire'; // équivalent d'un push
    } elseif (!preg_match('/^[a-zA-Z0-9_-]{6,20}$/', $_POST['mdp'])) {
        $errors[] = 'Le mot de passe doit faire entre 6 et 20 caractères et ne '
                . 'contenir que des chiffres, des lettres ou les caractères _ et -';
    }

    if ($_POST['mdp'] != $_POST['mdp_confirm']) {
        $errors [] = 'Le mot de passe et sa confirmation ne sont pas identiques';
    }
    
    if (empty($errors)) {
        $query = <<<EOS
INSERT INTO utilisateur (
    nom,
    prenom,
    email,
    mdp,
    civilite,
    ville,
    cp,
    adresse
) VALUES (
    :nom,
    :prenom,
    :email,
    :mdp,
    :civilite,
    :ville,
    :cp,
    :adresse
)
EOS;
     $stmt = $pdo->prepare($query);
     $stmt->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':email' => $email,
         // encryptage du mdp à l'enregistrement
        ':mdp' => password_hash($_POST['mdp'], PASSWORD_BCRYPT),
        ':civilite' => $civilite,
        ':ville' => $ville,
        ':cp' => $cp,
        ':adresse' => $adresse
     ]);
     
     setFlashMessage('Votre compte est créé');
     // header('Location: index.php');
     // die;
    }
}

require __DIR__ . '/layout/top.php';

if (!empty($errors)) :

?>

<div class="alert alert-danger">
    <h5 class="alert-heading">Le formulaire contient des erreurs</h5>
    <?= implode ('<br>', $errors); ?>
</div>

<?php
    ENDIF;
?>
    <h1>Inscription</h1>
    
    <form method="post">
        <div class="form-group">
            <label>Civilité</label>
            <select name="civilite" class="form-control">
                <option value=""></option>
                <option value="Mme" <?php if ($civilite == 'Mme') {echo 'selected';} ?>>Mme</option>
                <option value="M." <?php if ($civilite == 'M.') {echo 'selected';} ?>>M.</option>;
            </select>
        </div>
        
        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" value="<?= $nom; ?>">
        </div>
        
        <div class="form-group">
            <label>Prénom</label>
            <input type="text" name="prenom" class="form-control" value="<?= $prenom; ?>">
        </div>
        
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= $email; ?>">
        </div>
        
        <div class="form-group">
            <label>Code postal</label>
            <input type="text" name="cp" class="form-control" value="<?= $cp; ?>">
        </div>
        
        <div class="form-group">
            <label>Ville</label>
            <input type="text" name="ville" class="form-control" value="<?= $ville; ?>">
        </div>
        
        <div class="form-group">
            <label>Adresse</label>
            <textarea name="adresse" class="form-control"><?= $adresse; ?></textarea>
        </div>
        
        <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" name="mdp" class="form-control">
        </div>
        
        <div class="form-group">
            <label>Confirmation du mot de passe</label>
            <input type="password" name="mdp_confirm" class="form-control">
        </div>
        
        <div class="form-btn-group text-right">
            <button class="btn btn-primary" type="submit">
                Valider
            </button>
        </div>
    </form>
    
<?php
require __DIR__ . '/layout/bottom.php';
?>

    