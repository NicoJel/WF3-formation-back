<?php

include __DIR__ . '/../layout/top.php';
?>

<h1>Editer un abonné</h1>

<form method="post">
    <div class="form-group">
        <label>Prénom</label>
        <input type="text" name="prenom" class="form-control" value=" <?= $abonne->getPrenom(); ?> ">
    </div>
    
    <div class="form-btn-group text-right"> 
        <button type="submit" class="btn btn-primary">
            Ajouter l'abonné
        </button>
    </div>
</form>


<?php
include __DIR__ . '/../layout/bottom.php';
