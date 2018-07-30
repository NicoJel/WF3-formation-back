<!--
    Faire un formulaire pour ajouter une catégorie en ajax:
    - formulaire avec champ nom
    - intercepter le submit en js
    - envoyer la valeur du champ nom en ajax en POST vers un fichier PHP
    - ce fichier vérifie que le champ nom n'est pas vide
    - s'il n'est pas vide insert en bdd
    - ce fichier retourne un JSON avec 2 informations:
        > statut : ok ou ko
        > message : de confirmation ou d'erreur
    - en retour d'appel ajax afficher le message en vert si ok, rouge si ko
-->

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

    <script>
        $(function(){
            $('#monform').submit(function (event){
                event.preventDefault();
                var nom = $(this).val();

                    $.post(
                        '../categorie-ajax.php', // page appelée
                        $(this).serialize(), // fonctionne avec l'attribut name des input
                        function (response) { // ici on appelle response tout ce qu'on reçoit de la page categorie-ajax
                            if (response['statut'] == 'ok') {
                                color = 'green';
                            } else  {
                                color = 'red';
                            }

                            var reponse = '<p style="color:' + color + '">' + response['message'] + '</p>'
                            $('#reponse').html(reponse);

                        },
                        'json'
                    );       
            });
        });

    </script>
</body>
</html>