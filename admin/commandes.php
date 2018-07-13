<?php

/* 
 * Lister les commandes dans un tableau HTML:
 * -id de la commande
 * -nom et prénom de l'utilisateur qui a passé la commande
 * -montant formaté
 * -date de la commande
 * -statut
 * -date du statut
 * Passer le statu en liste déroulante avec un bouton Modifier pour changer le statu et sa date de la commande en bdd
 * (necessite un champ caché pour l'id de la commande)
 */

require_once __DIR__ . '/../include/init.php';
adminSecurity();

if (isset($_POST['modifierStatut'])) {
    $query = <<<SQL
UPDATE commande
    SET statut = :statut,
    date_statut = now()
WHERE id = :id
SQL;
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':statut' => $_POST['statut'],
        ':id' => $_POST['commandeId']
    ]);
    
    setFlashMessage('Le statut est modifié');
}

$query = <<<SQL
SELECT c.*, concat_ws(' ', u.prenom, u.nom) AS utilisateur
FROM commande c
JOIN utilisateur u ON c.utilisateur_id = u.id
SQL;
$stmt = $pdo->query($query);
$commandes = $stmt->fetchAll();
require __DIR__ . '/../layout/top.php';
?>

<h1>Gestion commandes</h1>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Utilisateur</th>
        <th>Montant total</th>
        <th>Date</th>
        <th>Statut</th>
        <th>Date MAJ statut</th>
    </tr>
    
    <?php
    foreach ($commandes as $commande) :
    ?>
    <tr>
        <td><?= $commande['id']; ?></td>
        <td><?= $commande['utilisateur']; ?></td>
        <td><?= prixFR($commande['Montant_total']); ?></td>
        <td><?= datetimeFr($commande['Date']); ?></td>
        <td><?= $commande['Statut']; ?>
            <form method="post" class="form-inline">
                <select name="statut" class="form-control">
                    <?php
                    foreach($statuts as $statut) :
                        $selected = ($statut == $commande['statut'])
                            ?'selected'
                            :'';
                    endforeach;
                    ?>
                         <option value="<?= $statut; ?>">
                             <?= $statut; ?>
                         </option>
                    <?php
                    endforeach;
                    ?>
                </select>
                <input type="hidden" name="commandeId" value="<?= $commande['id']; ?>">
                <button class="btn btn_primary" type="submit" name="modifierStatut">
                    Modifier
                </button>
            </form>
        </td>
        <td><?= $commande['Date_MAJ_statut']; ?></td>
    </tr>
    endforeach;
</table>
