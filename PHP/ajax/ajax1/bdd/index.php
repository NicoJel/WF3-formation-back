<?php
    require_once __DIR__ . '/cnx.php';

    $query = 'SELECT id, nom, prenom FROM utilisateur ORDER BY prenom, nom';

    $stmt = $pdo->query($query);
    $utilisateurs = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
    <select name="" id="utilisateur">
        <option value="">Choisissez</option>
        <?php
        foreach ($utilisateurs as $utilisateur) :
        ?>
        <option value="<?= $utilisateur['id']; ?>">
            <?= $utilisateur['prenom'] . ' ' . $utilisateur['nom']; ?>
        </option>
    <?php
    endforeach;
    ?>
    </select>
    <div id="detail"></div>
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>
    <script>
        /*- intercepter l'évenement change de la liste déroulante
          - recuperer l'id utilisateur de l'option séléctionnée
          - appeler utilisateur.php en ajax en lui passant cet id en GET
          - utilisateur.php utilise cet id pour récupérer les données de l'utilisateur contenue en bdd et construit un tableau HTML ou une liste <dl>
          - le traitement de la réponse en javascript inclus le détail de l'utilisateur dans la div #detail
          - si c'est l'option vide qui est choisie, on vide la div #detail*/

          $(function(){
            $('#utilisateur').change(function (){
                // valeur de l'option selectionnée
                // this fait référence à la balise select
                var id = $(this).val();

                if (id != '') { // si on a pas choisi l'option vide
                    $.get(
                        'utilisateur.php', // sur la page utilisateur.php
                        'id=' + id, // en lui passant l'id venant du select
                        // fonction qui traite la réponse d'utilisateur.php
                        function(response) { 
                            // on met le contenu de la réponse dans la div #detail
                            $('#detail').html(response);
                        }
                    )
                }else {
                    // si on a choici l'option vide, on vide la div #détail
                    $('#detail').html('');
                }    
            });

            // pour anticiper un évenement sur un élément du DOM qui n'existe pas encore dans la page
            $('#detail').on('click', '#email', function(){
                alert('ici');
            })
        });   



    </script>
    
</body>
</html>