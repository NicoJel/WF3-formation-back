<?php
require_once __DIR__ . '/../include/init.php';
adminSecurity();

// lister les catégories dans un tableau HTML

// le requêtage ici
$stmt = $pdo->query('SELECT * FROM categorie');
$categories = $stmt->fetchAll();

require __DIR__ . '/../layout/top.php';
?>
<h1>Gestion catégories</h1> 

<p><a href="categorie-edit.php">Ajouter une catégorie</a></p>

<!-- le tableau HTML ici -->
<table class="table">
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th width="350px"></th>
    </tr>
    <?php
    foreach ($categories as $categorie) :
    ?>
        <tr>
            <td><?= $categorie['id']; ?></td>
            <td><?= $categorie['nom']; ?></td>
            <td>
                <a class="btn btn-primary"
                   href="categorie-edit.php?id=<?= $categorie['id']; ?>">
                    Modifier
                </a>
                <a class="btn btn-danger btn-delete"
                   href="categorie-delete.php?id=<?= $categorie['id']; ?>">
                    Supprimer
                </a>
            </td>
        </tr>
    <?php
    endforeach;
    ?>
</table>

<div class="modal" tabindex="-1" role="dialog" id="confirm-delete">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">confirmer la suppression?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Oui</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
      </div>
    </div>
  </div>
</div>

<?php
$javascripts = 'admin-categorie.js';
require __DIR__ . '/../layout/bottom.php';
?>

