<?php
require_once __DIR__ . '/../include/init.php';
require __DIR__ . '/../layout/top.php';

?>

    <h1>Gestion catégories</h1>
    
    <p><a href="categorie_edit.php">Ajouter une catégorie</a></p>
    <!-- tableau html ici -->
    <?php
    
    $stmt = $pdo->query('SELECT * FROM categorie');
    $categories = $stmt->fetchAll();
    
    ?>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>NOM</th>
            <th width="250px"></th>
        </tr>
        
        
            <?php
                foreach($categories as $categorie) {
            ?>
                <tr>
                   <td> <?= $categorie['id']; ?></td>
                   <td> <?= $categorie['nom']; ?></td>
                   <td>
                      <a class="btn btn-primary" 
                       href="categorie_edit.php?id=<?=$categorie['id']; ?>">
                        Modifier  
                      </a>
                      <a class="btn btn-danger" 
                       href="categorie_delete.php?id=<?=$categorie['id']; ?>">
                        Supprimer  
                      </a>
                </tr>
                </tr>
           <?php } ?>
    </table>
    
<?php
require __DIR__ . '/../layout/bottom.php';
?>

    