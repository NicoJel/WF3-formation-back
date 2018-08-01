<?php
include __DIR__ . '/../layout/top.php';
?>

<h1>Abonnés</h1>
<table class="table">
    <tr>
        <th>Id</th>
        <th>Prénom</th>
        <th width="350px"></th>
    </tr>
    
    <?php
    foreach ($abonnes as $abonne) :
    ?>
    
    <tr>
        <td><?= $abonne->getId(); ?></td>
        <td><?= $abonne->getPrenom(); ?></td>
        <td>
            <a href="abonne-edit.php?id=<?= $abonne->getId(); ?>" class="btn btn-primary">
                Modifier
            </a>
        </td>
    </tr>
    
    <?php
    endforeach;
    ?>
</table>

<?php
include __DIR__ . '/../layout/bottom.php';
